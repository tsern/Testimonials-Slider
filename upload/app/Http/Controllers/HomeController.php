<?php

namespace App\Http\Controllers;

use App\Testimonial;
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
        $testimonialModels = Testimonial::all();

        $testimonials = array();

        foreach ($testimonialModels as $testimonialModel) {

            $imageModel = $testimonialModel->image;
            $t['img'] = $imageModel->img_url;

            $userModel = $testimonialModel->user;
            $t['name'] = $userModel->name;

            $t['desc'] = $testimonialModel->description;

            array_push($testimonials, $t);
        }

        return view('home',
            ['testimonials'=> $testimonials,
                'isAdmin'=> $isAdmin]
        );
    }
}
