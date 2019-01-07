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
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show()
    {
        if (!Auth::check() || !Auth::user()->isAdmin())
        {
            return redirect()->guest('login');
        }

        $users = User::all();
        return view('admin.user',
            ['users' => $users,
                'viewTitle' => 'Users',
                'indexActiveView' => 3]);
    }
}