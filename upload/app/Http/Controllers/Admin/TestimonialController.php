<?php
/**
 * Created by PhpStorm.
 * User: tania
 * Date: 04.01.19
 * Time: 13:17
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Testimonial;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class TestimonialController extends Controller
{
    public function index()
    {
        if (!Auth::check() || !Auth::user()->isAdmin())
        {
            return redirect()->guest('login');
        }

        $testimonials = Testimonial::all();

        return view('admin.Testimonial.index',
            ['testimonials' => $testimonials,
                'viewTitle' => 'Testimonial',
                'indexActiveView' => 2]);
    }

    public function show()
    {
        if (!Auth::check() || !Auth::user()->isAdmin())
        {
            return redirect()->guest('login');
        }

        $testimonials = Testimonial::all();
        return view('admin.Testimonial.show',
            ['testimonials' => $testimonials,
                'viewTitle' => 'Testimonial',
                'indexActiveView' => 2]);
    }

    public function store(Request $request)
    {
        if (!Auth::check() || !Auth::user()->isAdmin())
        {
            return redirect()->guest('login');
        }

        $name = Auth::id();

        $this->validate($request, [
            'title' => 'required|max:100',
        ]);

        $allFields = $request->all();
        $allFields['name'] = $name;
        if ($request->hasFile('file')) {
            $allFields['file'] = $request->file('file')
                ->store('uploads', 'public');
//        $allFields['img_url'] = "https://www.valuecoders.com/blog/wp-content/uploads/2018/05/laravel.jpg";

            Testimonial::create($allFields);

            return redirect()->route('testimonial.index')
                ->with('success', 'Testimonial created successfully');
        }
    }

    public function create()
    {
        if (!Auth::check() || !Auth::user()->isAdmin())
        {
            return redirect()->guest('login');
        }

        return view('admin.Testimonial.create',
            [  'viewTitle' => 'Testimonial',
                'indexActiveView' => 2]);
    }
}



