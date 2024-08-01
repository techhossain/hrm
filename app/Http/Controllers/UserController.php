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
            $items_per_page = 6;
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
            'name'      => 'required',
            'email'     => 'required|email',
            'password'  => 'required|min:6|confirmed',
            'photo'     => 'nullable|mimes:jpg,png,jpeg,bmp'
        ]);

        $user = new User;

        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->password = $request->password;

        // Upload photo
        $photo = $request->file('photo');

        if (!empty($photo) && $photo->isValid()) {
            $user->addMediaFromRequest('photo')->toMediaCollection('dp');
        }

        // User role
        $is_admin = $request->is_admin;
        if ($is_admin == "Administrator") {
            $user->is_admin = true;
        } else if ($is_admin == "Employee") {
            $user->is_admin = false;
        }

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

        $helpers = \App\Helpers\Helpers::instance();
        $media_url = $helpers->user_photo_url($user, 'dp');


        return view('admin.user.edit-user', compact('id', 'user', 'media_url'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'      => 'required',
            'email'     => 'required|email',
            'dp'        => 'mimes:jpg,png,jpeg,bmp'
        ]);

        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;

        if (isset($request->password)) {
            $user->password = $request->password;
        }


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

    public function user_logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('message', 'Please Login!');
    }

    /**
     * Show User Profile Page.
     */
    public function show_user_profile()
    {
        $user = auth()->user();
        $helpers = \App\Helpers\Helpers::instance();
        $media_url = $helpers->user_photo_url($user, 'dp');

        return view('admin.user.profile', compact('user', 'media_url'));
    }

    /**
     * Update User Profile
     */
    public function update_user_profile(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'email'  => 'required|email',
            'dp' => 'mimes:jpg,png,jpeg,bmp'
        ]);

        $user = auth()->user();

        $user->name = $request->name;
        $user->email = $request->email;

        if (isset($request->password)) {
            $user->password = $request->password;
        }

        $photo = $request->file('photo');

        if (isset($photo) && $photo->isValid()) {
            // $user->addMediaFRomRequest('profile_pic')
            //     ->toMediaCollection('Profile Picture');

            $user->addMediaFromRequest('photo')->toMediaCollection('dp');
        }

        $data = $user->save();

        if ($data) {

            return redirect()->route('admin.user.profile')->with('message', 'Profile updated Successfully');
        } else {
            return redirect()->route('admin.users')->with('message', 'User updation Failed');
        }
    }
}
