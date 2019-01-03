@extends('layouts.admin')
@section('content')

    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color:  #095f59">
            <h3 class="panel-title">All Testimonials</h3>
        </div>
        <div class="panel-body">
            {{--<table class="table table-striped table-hover">--}}

            <div class="table-container">
                <table id="mytable" class="table table-bordred table-striped">
                    <thead>
                        <th>Testimonial Title</th>
                        <th>Author</th>
                        <th>Date</th>
                    </thead>
                    <tbody>
                    @if($testimonials->count())
                        @foreach($testimonials as $testimonial)
                            <tr>
                                <td>{{$testimonial->title}}</td>
                                <td>{{$testimonial->user_id}}</td>
                                <td>{{$testimonial->period_id}}</td>
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
