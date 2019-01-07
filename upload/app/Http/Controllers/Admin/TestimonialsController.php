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
        if (!Auth::check() || !Auth::user()->isAdmin())
        {
            return redirect()->guest('login');
        }

        $testimonials = Testimonial::all();

        return view('admin.Testimonials.index',
            ['testimonials' => $testimonials,
                'viewTitle' => 'Testimonials',
                'indexActiveView' => 1]);
    }

    public function create()
    {
        if (!Auth::check() || !Auth::user()->isAdmin())
        {
            return redirect()->guest('login');
        }

        return view('admin.Testimonials.create',
            [  'viewTitle' => 'Testimonials',
                'indexActiveView' => 1]);
    }

    public function show()
    {
        if (!Auth::check() || !Auth::user()->isAdmin())
        {
            return redirect()->guest('login');
        }

        $testimonials = Testimonial::all();
        return view('admin.Testimonials.show',
        ['testimonials' => $testimonials,
         'viewTitle' => 'Testimonials',
         'indexActiveView' => 1]);
    }

    public function store(Request $request)
    {
        if (!Auth::check() || !Auth::user()->isAdmin())
        {
            return redirect()->guest('login');
        }

        $id = Auth::id();

        $this->validate($request, [
            'title' => 'required'
        ]);

        $allFields = $request->all();
        $allFields['start_date'] = date('Y-m-d G:i:s', strtotime($allFields['start_date']));
        $allFields['end_date'] = date('Y-m-d G:i:s', strtotime($allFields['end_date']));
        $allFields['user_id'] = $id;
        $allFields['img_url'] = "https://www.valuecoders.com/blog/wp-content/uploads/2018/05/laravel.jpg";

        Testimonial::create($allFields);

        return redirect()->route('testimonials.index')

            ->with('success', 'Testimonials created successfully');
    }


    public function update(Request $request, $id)
    {
        if (!Auth::check() || !Auth::user()->isAdmin())
        {
            return redirect()->guest('login');
        }

        $user_id = Auth::id();

        $this->validate($request, [
            'title' => 'required'
        ]);

        $allFields = $request->all();
        $allFields['user_id'] = $user_id;
        $allFields['start_date'] = date('Y-m-d G:i:s');
        $allFields['end_date'] = date('Y-m-d G:i:s');

        $result = Testimonial::find($id)->update($allFields);
        return redirect()->route('testimonials.index')
            ->with('success','Testimonial updated successfully');
    }

    public function edit($id)
    {
        if (!Auth::check() || !Auth::user()->isAdmin())
        {
            return redirect()->guest('login');
        }

        $testimonial = Testimonial::find($id);
        return view('admin.Testimonials.edit',
            ['viewTitle' => 'Testimonials',
            'indexActiveView' => 1,
                'testimonial' => $testimonial]);
    }

    public function destroy($id)
    {
        if (!Auth::check() || !Auth::user()->isAdmin())
        {
            return redirect()->guest('login');
        }

        Testimonial::find($id)->delete();
        return redirect()->route('testimonials.index')
            ->with('success', 'Task deleted successfully');
    }

}
