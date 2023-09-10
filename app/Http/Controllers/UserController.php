<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!isset($_GET['user']) || empty($_GET['user'])) {

            $items_per_page = 8;
            $users = User::orderBy('id', 'desc')->paginate($items_per_page);
            $pagination = 1;
        } else {

            $search_text = isset($_GET['user']) ? $_GET['user'] : '';
            $users = User::where('name', 'LIKE', '%' . $search_text . '%')->orWhere('email', 'LIKE', '%' . $search_text . '%')->get();
            $pagination = 0;
        }



        return view('admin.user.user-list', compact('users', 'pagination'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create-user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'email'  => 'required|email',
            'password'  => 'required|min:6|confirmed'
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $data = $user->save();

        if ($data) {
            return redirect()->route('admin.users')->with('message', 'User created Successfully');
        } else {
            return redirect()->route('admin.user.create')->with('message', 'User created Failed');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        return view('admin.user.edit-user', compact('id', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'  => 'required',
            'email'  => 'required|email',
            'password'  => 'required|min:6|confirmed',
            'dp' => 'mimes:jpg,png,jpeg,bmp'
        ]);

        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $photo = $request->file('photo');

        if ($photo->isValid()) {
            // $user->addMediaFRomRequest('profile_pic')
            //     ->toMediaCollection('Profile Picture');

            $user->addMediaFromRequest('photo')->toMediaCollection('dp');
        }

        $data = $user->save();

        if ($data) {

            return redirect()->route('admin.users')->with('message', 'User updated Successfully');
        } else {
            return redirect()->route('admin.user.create')->with('message', 'User updation Failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);

        if ($user->delete()) {
            return redirect()->route('admin.users')->with('message', 'User Deleted!');
        }
    }
}
