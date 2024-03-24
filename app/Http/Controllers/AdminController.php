<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
    /**
     * Display admin dashboard
     */
    public function index()
    {
        $user = auth()->user();
        $helpers = \App\Helpers\Helpers::instance();
        $media_url = $helpers->user_photo_url($user, 'dp');

        return view('admin.dashboard', compact('media_url'));
    }

    /**
     * Display all employees to admin dashboard
     */
    // public function employee_index()
    // {
    //     //
    //     return view('admin.employee.index');
    // }

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

    public function leaves()
    {
        $user = auth()->user();
        $helpers = \App\Helpers\Helpers::instance();
        $media_url = $helpers->user_photo_url($user, 'dp');

        return view('admin.leaves.index', compact('media_url'));
    }

    public function roster()
    {
        $user = auth()->user();
        $helpers = \App\Helpers\Helpers::instance();
        $media_url = $helpers->user_photo_url($user, 'dp');

        return view('admin.roster.index', compact('media_url'));
    }

    public function attendance()
    {
        $user = auth()->user();
        $helpers = \App\Helpers\Helpers::instance();
        $media_url = $helpers->user_photo_url($user, 'dp');

        return view('admin.attendance.index', compact('media_url'));
    }

    public function holiday()
    {
        $user = auth()->user();
        $helpers = \App\Helpers\Helpers::instance();
        $media_url = $helpers->user_photo_url($user, 'dp');

        return view('admin.holiday.index', compact('media_url'));
    }

    public function designation()
    {
        $user = auth()->user();
        $helpers = \App\Helpers\Helpers::instance();
        $media_url = $helpers->user_photo_url($user, 'dp');

        return view('admin.designation.index', compact('media_url'));
    }

    public function department()
    {
        $user = auth()->user();
        $helpers = \App\Helpers\Helpers::instance();
        $media_url = $helpers->user_photo_url($user, 'dp');

        return view('admin.department.index', compact('media_url'));
    }
}
