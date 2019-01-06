@extends('layouts.admin')

@section('content')
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color:  #095f59">
                <h3 class="panel-title">All Images</h3>
            </div>
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
                    @if($images->count())
                        @foreach($images as $image)
                            <tr>
                                <td><input type="checkbox" class="checkthis" /></td>
                                <td>{{$image->id}}</td>
                                <td>{{$image->title}}</td>
                                <td>{{$image->status}}</td>
                                <td>{{$image->start_date}}</td>
                                <td>{{$image->end_date}}</td>
                                <td><a class="btn btn-primary btn-xs" href="{{action('Admin\ImageController@edit', $image->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                                <td>
                                    <form action="{{action('Admin\ImageController@destroy', $image->id)}}" method="post">
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