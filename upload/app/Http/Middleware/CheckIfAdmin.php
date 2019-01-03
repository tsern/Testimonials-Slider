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
        $user = $request->user();

        if (!isset($user)) {
            return redirect('admin/login');
        }

        if (!$user->isAdmin()) {
            return redirect('/');
        }

        return $next($request);
    }
}