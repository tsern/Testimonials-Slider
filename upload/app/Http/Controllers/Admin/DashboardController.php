<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\User;

class DashboardController extends Controller
{
    public function show()
    {
        $users = User::all();
        return view('admin.dashboard',
            ['users' => $users,
             'viewTitle' => 'Dashboard',
             'indexActiveView' => 0]);
    }

}
