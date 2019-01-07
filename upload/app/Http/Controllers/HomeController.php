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
        $testimonials = Testimonial::all();
        return view('home',
            ['testimonials'=> $testimonials,
                'isAdmin'=> $isAdmin]
        );
    }
}
