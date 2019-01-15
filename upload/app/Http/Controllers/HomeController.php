<?php

namespace App\Http\Controllers;

use App\Testimonial;
use App\TestimonialSlider;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $isAdmin = Auth::check() && Auth::user()->isAdmin();

        $testimonials = Testimonial::all();

        $testimonialsData = array();
        $curDate = new DateTime();

        foreach ($testimonials as $testimonial) {
            $startDateStr = $testimonial->slider->start_date;
            $startDate = DateTime::createFromFormat('Y-m-d G:i:s', $startDateStr);
            $endDateStr = $testimonial->slider->end_date;
            $endDate = DateTime::createFromFormat('Y-m-d G:i:s', $endDateStr);

            if ($curDate < $startDate || $curDate > $endDate) {
                continue;
            }

            if ($testimonial->status !=1) {
                continue;
            }

            if ($testimonial->slider->status !=1) {
                continue;
            }


            $t['image'] = $testimonial->image;
            $t['name'] = $testimonial->name.' '.$testimonial->lastname;
            $t['desc'] = $testimonial->description;
            $t['company'] = $testimonial->company;
            $t['show_image'] = $testimonial->slider->show_image;
            $t['show_company'] = $testimonial->slider->show_company;

            array_push($testimonialsData, $t);
        }

        return view('home',
            ['testimonials'=> $testimonialsData,
                'isAdmin'=> $isAdmin]
        );
    }
}
