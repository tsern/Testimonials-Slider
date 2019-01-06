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


class ImageController extends Controller
{
    public function index()
    {
        $images = Image::all();

        return view('admin.Images.index',
            ['images' => $images,
                'viewTitle' => 'Images',
                'indexActiveView' => 2]);
    }

    public function show()
    {
        $images = Image::all();
        return view('admin.Images.show',
            ['images' => $images,
                'viewTitle' => 'Images',
                'indexActiveView' => 2]);
    }

    public function create()
    {
        return view('admin.Images.create',
            [  'viewTitle' => 'Images',
                'indexActiveView' => 2]);
    }
}



