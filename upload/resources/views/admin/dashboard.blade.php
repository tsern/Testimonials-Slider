@extends('layouts.admin')
@section('content')

<div class="col-md-9">
    <div class="panel panel-default">
        <div class="panel-heading" style="background-color:  #095f59;">
            <h3 class="panel-title">Website Overview</h3>
        </div>
        <div class="panel-body">
            <div class="col-md-3">
                <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 12</h2>
                    <h4>Users</h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 25</h2>
                    <h4>Pages</h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>126</h2>
                    <h4>Posts</h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 2129</h2>
                    <h4>Visitores</h4>
                </div>
            </div>
        </div>
    </div>
    <!--Latest User-->
    <div class="panel panel-default">
        <div class="panel-heading" style="background-color: #095f59">
            <h3 class="panel-title">Latest Users</h3>
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

@endsection
