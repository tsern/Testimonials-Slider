<?php
/**
 * Created by PhpStorm.
 * User: tania
 * Date: 04.01.19
 * Time: 13:17
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Image;
use Illuminate\Support\Facades\Auth;


class ImageController extends Controller
{
    public function index()
    {
        if (!Auth::check() || !Auth::user()->isAdmin())
        {
            return redirect()->guest('login');
        }

        $images = Image::all();

        return view('admin.Images.index',
            ['images' => $images,
                'viewTitle' => 'Images',
                'indexActiveView' => 2]);
    }

    public function show()
    {
        if (!Auth::check() || !Auth::user()->isAdmin())
        {
            return redirect()->guest('login');
        }

        $images = Image::all();
        return view('admin.Images.show',
            ['images' => $images,
                'viewTitle' => 'Images',
                'indexActiveView' => 2]);
    }

    public function create()
    {
        if (!Auth::check() || !Auth::user()->isAdmin())
        {
            return redirect()->guest('login');
        }

        return view('admin.Images.create',
            [  'viewTitle' => 'Images',
                'indexActiveView' => 2]);
    }
}



