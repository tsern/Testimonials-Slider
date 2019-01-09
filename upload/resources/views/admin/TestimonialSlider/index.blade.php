@extends('layouts.admin')

@section('content')
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color:  #095f59">
                <h3 class="panel-title">All Testimonials</h3>
            </div>
            @if(Session::has('success'))
                <div class="alert alert-info">
                    {{Session::get('success')}}
                </div>
            @endif
            <div class="panel-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <th><input type="checkbox" id="checkall" /></th>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        @if($testimonials->count())
                            @foreach($testimonials as $testimonial)
                            <tr>
                                <td><input type="checkbox" class="checkthis" /></td>
                                <td>{{$testimonial->id}}</td>
                                <td>{{$testimonial->title}}</td>
                                <td>{{$testimonial->status}}</td>
                                <td>{{$testimonial->start_date}}</td>
                                <td>{{$testimonial->end_date}}</td>
                                <td><a class="btn btn-primary btn-xs" href="{{action('Admin\TestimonialSliderController@edit', $testimonial->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                                <td>
                                    <form action="{{action('Admin\TestimonialSliderController@destroy', $testimonial->id)}}" method="post">
                                        {{csrf_field()}}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7">No Records found !!</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
@endsection
