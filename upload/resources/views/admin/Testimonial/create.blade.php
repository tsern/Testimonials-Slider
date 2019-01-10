@extends('layouts.admin')

@section('content')
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color:  #095f59">
                <h3 class="panel-title">Add Testimonial</h3>
            </div>
            <div class="panel-body">
                <table class="table table-striped table-hover">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(Session::has('success'))
                        <div class="alert alert-info">
                            {{Session::get('success')}}
                        </div>
                    @endif
                    {{--<input method="POST" action="{{ route('testimonials.store') }}"  role="form">--}}
                    {{--<form action="{{ url('task') }}" method="POST" class="form-horizontal"></form>--}}
                    <form method="POST" action="{{ route('testimonial.store') }}"  role="form">
                    {{ csrf_field() }}
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="title" id="name" class="form-control input-sm" placeholder="Testimonial title">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <select name="status">
                                        <option value="" hidden>Testimonials Status</option>
                                        <option value="1">Enable</option>
                                        <option value="0">Disable</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <textarea name="description" class="form-control input-sm" placeholder="Testimonial Text"></textarea>
                        </div>

                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control input-sm" placeholder="First name">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="lastname" class="form-control input-sm" placeholder="Last name">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="company"  class="form-control input-sm" placeholder="Company name">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="url" name="website" class="form-control input-sm" placeholder="Website link">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="url" name="linkedin" class="form-control input-sm" placeholder="Linkedin link" pattern="https://.*" size="30" required>
                                </div>
                            </div>
                        </div>

                        {{--<div class="row">--}}
                            {{--<div class="col-xs-6 col-sm-6 col-md-6">--}}
                                {{--<div class="form-group {{ $errors->has('file') ? 'has-error' : ''}}">--}}
                                    {{--<label for="file" class="control-label">{{ 'Upload image' }}</label>--}}
                                    {{--<input class="form-control" name="file" type="file" id="file" value="{{ isset($testimonial->file) ? $testimonial->file : ''}}" >--}}
                                    {{--{!! $errors->first('file', '<p class="help-block">:message</p>') !!}--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="image" class="form-control input-sm" placeholder="image url">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="slider_id" class="form-control input-sm" placeholder="Testimonial slider">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <input type="submit"  value="Save" class="btn btn-success btn-block">
                                <a href="{{ route('testimonial.index') }}" class="btn btn-info btn-block">Cancel</a>
                            </div>
                        </div>
                    </form>
                </table>
            </div>
        </div>


        <script>
            $(document).ready(function(){
                $('#datetimepicker1').datetimepicker();
                $('#datetimepicker2').datetimepicker();
            });
        </script>

    </div>
@endsection


