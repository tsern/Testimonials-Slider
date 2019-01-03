<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
{{--<script src="{{ asset('js/app.js') }}" defer></script>--}}

<!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{--<link href="/bootstrap.min.css" rel="stylesheet">--}}
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">TechnoGeeK</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.html">Dashboard</a></li>
                <li><a href="pages.html">Pages</a></li>
                <li><a href="posts.html">Posts</a></li>
                <li><a href="users.html">Users</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="index.html">Welcome, Madhav</a></li>
                <li><a href="login.html">Logout</a></li>

            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>


<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
                    <small>Manage Your Site</small>
                </h1>
            </div>
            <div class="col-md-2">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Create Content
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Add Pages</a></li>
                        <li><a href="#">Add Posts</a></li>
                        <li><a href="#">Add Users</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<br>

<section id="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="active">Dashboard</li>
        </ol>
    </div>
</section>


<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="index.html" class="list-group-item active main-color-bg"><span
                                class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        Dashboard <span class="badge">12</span>
                    </a>
                    <a href="pages.html" class="list-group-item"><span class="glyphicon glyphicon-list-alt"
                                                                       aria-hidden="true"></span> Pages<span
                                class="badge">25</span></a>
                    <a href="posts.html" class="list-group-item"><span class="glyphicon glyphicon-pencil"
                                                                       aria-hidden="true"></span> Posts<span
                                class="badge">126</span></a>
                    <a href="users.html" class="list-group-item"><span class="glyphicon glyphicon-user"
                                                                       aria-hidden="true"></span> Users <span
                                class="badge">12</span></a>
                </div>

                <div class="well">
                    <h4>Disk Space Used</h4>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                             aria-valuemax="100" style="width: 60%;">
                            60%
                        </div>
                    </div>
                    <h4>Bandwidth Used</h4>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                             aria-valuemax="100" style="width: 40%;">
                            40%
                        </div>
                    </div>
                </div>
            </div>

            @yield('content')

        </div>
    </div>
    </div>
</section>


<footer id="footer">
    <p>Copyright : Madhav Prasad<br>2017</p>
</footer>

<style>
    body{
        background: #f4f4f4;
    }

    .navbar{
        min-height: 33px !important;
        margin-bottom: 0;
        border-radius: 0;

    }
    .navbar-nav> li>a, .navbar-brand{
        padding-top: 6px !important;
        padding-bottom: 0;
        height: 33px;

    }

    .main-color-bg{
        background-color: #095f59;
        color: #ffffff !important;
    }


    /*Header */

    #header{
        background: #333333;
        color: #ffffff;
        padding-bottom: 10px;
        margin-bottom: : 15px;
    }

    #header .create{
        padding-top: 20px;
    }

    .dash-box{
        text-align: center;
    }

    #footer{
        background: #333333;
        color: #ffffff;
        text-align: center;
        padding: 30px;
        margin-top: 30px;

    }



    .navbar-default {
        background-color: #095f59;
        border-color: #689a9b;
    }
    .navbar-default .navbar-brand {
        color: #efee24;
    }
    .navbar-default .navbar-brand:hover,
    .navbar-default .navbar-brand:focus {
        color: #010800;
    }
    .navbar-default .navbar-text {
        color: #efee24;
    }
    .navbar-default .navbar-nav > li > a {
        color: #efee24;
    }
    .navbar-default .navbar-nav > li > a:hover,
    .navbar-default .navbar-nav > li > a:focus {
        color: #010800;
    }
    .navbar-default .navbar-nav > .active > a,
    .navbar-default .navbar-nav > .active > a:hover,
    .navbar-default .navbar-nav > .active > a:focus {
        color: #010800;
        background-color: #689a9b;
    }
    .navbar-default .navbar-nav > .open > a,
    .navbar-default .navbar-nav > .open > a:hover,
    .navbar-default .navbar-nav > .open > a:focus {
        color: #010800;
        background-color: #689a9b;
    }
    .navbar-default .navbar-toggle {
        border-color: #689a9b;
    }
    .navbar-default .navbar-toggle:hover,
    .navbar-default .navbar-toggle:focus {
        background-color: #689a9b;
    }
    .navbar-default .navbar-toggle .icon-bar {
        background-color: #efee24;
    }
    .navbar-default .navbar-collapse,
    .navbar-default .navbar-form {
        border-color: #efee24;
    }
    .navbar-default .navbar-link {
        color: #efee24;
    }
    .navbar-default .navbar-link:hover {
        color: #010800;
    }

    @media (max-width: 767px) {
        .navbar-default .navbar-nav .open .dropdown-menu > li > a {
            color: #efee24;
        }
        .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
        .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
            color: #010800;
        }
        .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
        .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
        .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
            color: #010800;
            background-color: #689a9b;
        }
    }

    /*Breadcrumb*/

    .breadcrumb{
        background: #cccccc;
        color: #333333;
    }
    .breadcrumb a{
        color: #333333;
    }
</style>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</body>
</html>