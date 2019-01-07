<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function show()
    {
        if (!Auth::check() || !Auth::user()->isAdmin())
        {
            return redirect()->guest('login');
        }

        $users = User::all();
        return view('admin.dashboard',
            ['users' => $users,
             'viewTitle' => 'Dashboard',
             'indexActiveView' => 0]);
    }

}
