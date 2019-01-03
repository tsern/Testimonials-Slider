@extends('layouts.admin')
@section('content')

    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading"style="background-color:  #095f59;>
            <h3 class="panel-title">All Testimonials</h3>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-hover">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Joined</th>
                </tr>

                <tr>
                    <td>Madhav Prasad</td>
                    <td>mr.madhavprasad@gmail.com</td>
                    <td>Dec 13,2014</td>
                </tr>
                <tr>
                    <td>Nagendra Kushwaha</td>
                    <td>nkushwaha822@gmail.com</td>
                    <td>Feb 15,2014</td>
                </tr>
                <tr>
                    <td>Arun Kumar</td>
                    <td>kumarun@yahoo.com</td>
                    <td>Aug 17, 2015</td>
                </tr>
                <tr>
                    <td>Nabin Singh</td>
                    <td>singhNavs@outlook.com</td>
                    <td>March 08,2016</td>
                </tr>
            </table>
        </div>
    </div>

@endsection
