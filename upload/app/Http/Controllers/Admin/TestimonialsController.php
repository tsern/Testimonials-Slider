<?php
/**
 * Created by PhpStorm.
 * User: tania
 * Date: 03.01.19
 * Time: 17:55
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Testimonial;


class TestimonialsController extends Controller
{
    public function show()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonial.show',
        ['testimonials' => $testimonials,
         'viewTitle' => 'Testimonials',
         'indexActiveView' => 1]);
    }

}
