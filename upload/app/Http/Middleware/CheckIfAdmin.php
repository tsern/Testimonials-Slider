<?php
/**
 * Created by PhpStorm.
 * User: tania
 * Date: 02.01.19
 * Time: 14:37
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckIfAdmin
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            return $next($request);
        }

        return redirect('admin/login');
    }
}