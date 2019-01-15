<?php
/**
 * Created by PhpStorm.
 * User: tania
 * Date: 04.01.19
 * Time: 12:48
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function show()
    {
        $users = User::all();
        return view('admin.user',
            ['users' => $users,
                'viewTitle' => 'Users',
                'indexActiveView' => 3]);
    }
}