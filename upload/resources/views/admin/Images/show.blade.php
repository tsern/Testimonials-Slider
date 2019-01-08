@extends('layouts.admin')
@section('content')

    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color:  #095f59;">
                <h3 class="panel-title">All Images</h3>
            </div>
            <div class="panel-body">
                @if($images->count())
                    @foreach($images as $image)
                        <div class="responsive">
                            <div class="gallery">
                                <img src={{$image->img_url}} alt={{$image->title}} width="300" height="200">
                                <div class="desc">{{$image->desc}}></div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No Records found !!!</p>
                @endif
            </div>
        </div>
    </div>


    <style type="text/css">
        .gallery {
            border: 2px solid #ccc;
        }

        .gallery:hover {
            border: 1px solid #777;
        }

        .gallery img {
            width: 100%;
            height: auto;
        }

        .desc {
            padding: 15px;
            text-align: center;
        }

        * {
            box-sizing: border-box;
        }

        .responsive {
            padding: 0 6px;
            float: left;
            width: 24.99999%;
        }

        @media only screen and (max-width: 700px) {
            .responsive {
                width: 49.99999%;
                margin: 6px 0;
            }
        }

        @media only screen and (max-width: 500px) {
            .responsive {
                width: 100%;
            }
        }

        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>


@endsection
