<?php

namespace App\Http\Controllers;

use App\Helpers\Helpers;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $helpers = \App\Helpers\Helpers::instance();
        $media_url = $helpers->user_photo_url($user, 'dp');

        return view('employee.dashboard', compact('media_url'));
    }

    public function attendance()
    {
        $user = auth()->user();
        $helpers = \App\Helpers\Helpers::instance();
        $media_url = $helpers->user_photo_url($user, 'dp');

        return view('employee.attendance', compact('media_url'));
    }

    public function leaves()
    {
        $user = auth()->user();
        $helpers = \App\Helpers\Helpers::instance();
        $media_url = $helpers->user_photo_url($user, 'dp');

        return view('employee.leaves', compact('media_url'));
    }

    public function holiday()
    {
        $user = auth()->user();
        $helpers = \App\Helpers\Helpers::instance();
        $media_url = $helpers->user_photo_url($user, 'dp');

        return view('employee.holiday', compact('media_url'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    /**
     * Show Employee list to Admin Panel
     */
    public function employee_index()
    {
        //
        $employees = Employee::paginate(20);
        return view('admin.employee.index', compact('employees'));
    }

    /**
     * Show single Employee information
     */
    public function single_employee_details($id){

        $user = auth()->user();
        
        $employee = Employee::find($id);

        $helpers = Helpers::instance();

        $media_url = $helpers->user_photo_url($user, 'dp');

        return view('admin.employee.employee-details', compact('employee', 'media_url'));
    }

    /**
     * Show User Profile Page.
     */
    public function show_employee_profile()
    {
        $user = auth()->user();
        $helpers = \App\Helpers\Helpers::instance();
        $media_url = $helpers->user_photo_url($user, 'dp');

        return view('employee.profile', compact('user', 'media_url'));
    }

    /**
     * Update User Profile
     */
    public function update_employee_profile(Request $request)
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
