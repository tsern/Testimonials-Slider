@extends('layouts.admin')
@section('content')

    <!--All Users-->
<div class="col-md-9">
    <div class="panel panel-default">
        <div class="panel-heading" style="background-color: #095f59">
            <h3 class="panel-title">All Users</h3>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-hover">
                <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Joined</th>
                </thead>

                <tbody>
                @if($users->count())
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at}}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="7">No Records found!!!</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection