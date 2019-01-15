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
use App\TestimonialSlider;


class TestimonialSliderController extends Controller
{
    public function index()
    {
        $testimonials = TestimonialSlider::all();

        return view('admin.TestimonialSlider.index',
            ['testimonials' => $testimonials,
                'viewTitle' => 'Testimonial Slider',
                'indexActiveView' => 1]);
    }

    public function create()
    {
        return view('admin.TestimonialSlider.create',
            [  'viewTitle' => 'Testimonial Slider',
                'indexActiveView' => 1]);
    }

    public function store(Request $request)
    {
        $id = Auth::id();

        $this->validate($request, [
            'title' => 'required|max:100',
            'description' => 'max:500'
        ]);

        $allFields = $request->all();
        $allFields['start_date'] = date('Y-m-d G:i:s', strtotime($allFields['start_date']));
        $allFields['end_date'] = date('Y-m-d G:i:s', strtotime($allFields['end_date']));

        TestimonialSlider::create($allFields);

        return redirect()->route('testimonialslider.index')

            ->with('success', 'Testimonial Slider created successfully');
    }


    public function update(Request $request, $id)
    {
        $user_id = Auth::id();

        $this->validate($request, [
            'title' => 'required'
        ]);

        $allFields = $request->all();
//        $allFields['start_date'] = date('Y-m-d G:i:s', strtotime($allFields['start_date']));
//        $allFields['end_date'] = date('Y-m-d G:i:s', strtotime($allFields['end_date']));

        $result = TestimonialSlider::find($id)->update($allFields);
        return redirect()->route('testimonialslider.index')
            ->with('success','Testimonial Slider updated successfully');
    }

    public function edit($id)
    {
        $testimonial = TestimonialSlider::find($id);
        return view('admin.TestimonialSlider.edit',
            ['viewTitle' => 'TestimonialSlider',
            'indexActiveView' => 1,
                'testimonial' => $testimonial]);
    }

    public function destroy($id)
    {
        TestimonialSlider::find($id)->delete();
        return redirect()->route('testimonialslider.index')
            ->with('success', 'Task deleted successfully');
    }

}
