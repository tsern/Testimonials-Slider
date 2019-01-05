<?php
/**
 * Created by PhpStorm.
 * User: tania
 * Date: 03.01.19
 * Time: 17:55
 */

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Testimonial;


class TestimonialsController extends Controller
{
    public function index()
    {
//        if (!Auth::check())
//        {
//            return redirect()->guest('login');
//        }

//        $user_id = Auth::id();

        $testimonials = Testimonial::all();

        return view('admin.Testimonial.index',
            ['testimonials' => $testimonials,
                'viewTitle' => 'Testimonials',
                'indexActiveView' => 1]);
    }

    public function create()
    {
        return view('admin.Testimonial.create',
            [  'viewTitle' => 'Testimonials',
                'indexActiveView' => 1]);
    }

//    public function show()
//    {
//////        if (!Auth::check())
//////        {
//////            return redirect()->guest('login');
//////        }
////
////        $testimonials = Testimonial::all();
////        return view('Testimonial.show', compact('testimonials'));
//    }
    public function show()
    {
        $testimonials = Testimonial::all();
        return view('admin.Testimonial.show',
        ['testimonials' => $testimonials,
         'viewTitle' => 'Testimonials',
         'indexActiveView' => 1]);
    }

    public function store(Request $request)
    {
        if (!Auth::check())
        {
            return redirect()->guest('login');
        }

        $id = Auth::id();

        $this->validate($request, [
            'name' => 'required'
        ]);

        $allFields = $request->all();
        $allFields['start_date'] = date('Y-m-d G:i:s');
        $allFields['end_date'] = date('Y-m-d G:i:s');
        $allFields['user_id'] = $id;
        $allFields['type_id'] = 1;

        Testimonial::create($allFields);

        return redirect()->route('admin.testimonial.index')

            ->with('success', 'Testimonial created successfully');
    }

    public function edit($id)
    {
        if (!Auth::check())
        {
            return redirect()->guest('login');
        }

        Testimonial::find($id);
        return view('admin.testimonials.edit',
            ['viewTitle' => 'Testimonials',
            'indexActiveView' => 1]);
    }

}
