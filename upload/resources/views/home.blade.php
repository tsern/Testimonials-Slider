@extends('layouts.app')

@section('content')
    <div class="container">
        <div class='row'>
            <div class='col-md-offset-2 col-md-8'>
                <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                    <!-- Bottom Carousel Indicators -->
                    <ol class="carousel-indicators">
                        @if(count($testimonials))
                            <?php $index = 0 ?>
                            @foreach($testimonials as $testimonial)
                                    @if($index==0)
                                        <li data-target="#quote-carousel" data-slide-to="{{$index}}" class="active"></li>
                                    @else
                                        <li data-target="#quote-carousel" data-slide-to="{{$index}}"></li>
                                    @endif
                                <?php $index++ ?>
                            @endforeach
                        @endif
                    </ol>

                    <!-- Carousel Slides / Quotes -->
                    <div class="carousel-inner">
                    @if(count($testimonials))
                        <?php $index = 0 ?>
                        @foreach($testimonials as $testimonial)

                            <!-- Quote 1 -->
                            @if($index==0)
                            <div class="item active">
                            @else
                            <div class="item">
                            @endif
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-3 text-center">
                                            @if($testimonial['show_image']==1)
                                            <img class="img-circle"
                                                 src={{url('storage/'.$testimonial['image'])}} style="width:100px;height:100px;">
                                            @endif
                                        </div>
                                        <div class="col-sm-9">
                                            <p>{{$testimonial['desc']}}</p>
                                            <small>{{$testimonial['name']}}</small>
                                            @if($testimonial['show_company']==1)
                                                 <span>{{$testimonial['company']}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <?php $index++ ?>
                        @endforeach
                        <!-- Carousel Buttons Next/Prev -->
                        <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i
                                    class="fa fa-chevron-left"></i></a>
                        <a data-slide="next" href="#quote-carousel"
                           class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                    @else
                        <p>No Records found !!!</p>
                    @endif
                    </div>
                </div>
            </div>

            <style type="text/css">
                /* carousel */
                #quote-carousel {
                    padding: 0 10px 30px 10px;
                    margin-top: 30px;
                }

                /* Control buttons  */
                #quote-carousel .carousel-control {
                    background: none;
                    color: #222;
                    font-size: 2.3em;
                    text-shadow: none;
                    margin-top: 30px;
                }

                /* Previous button  */
                #quote-carousel .carousel-control.left {
                    left: -12px;
                }

                /* Next button  */
                #quote-carousel .carousel-control.right {
                    right: -12px !important;
                }

                /* Changes the position of the indicators */
                #quote-carousel .carousel-indicators {
                    right: 50%;
                    top: auto;
                    bottom: 0px;
                    margin-right: -19px;
                }

                /* Changes the color of the indicators */
                #quote-carousel .carousel-indicators li {
                    background: #c0c0c0;
                }

                #quote-carousel .carousel-indicators .active {
                    background: #333333;
                }

                #quote-carousel img {
                    width: 250px;
                    height: 100px
                }

                /* End carousel */

                .item blockquote {
                    border-left: none;
                    margin: 0;
                }

                .item blockquote img {
                    margin-bottom: 10px;
                }

                .item blockquote p:before {
                    content: "\f10d";
                    font-family: 'Fontawesome';
                    float: left;
                    margin-right: 10px;
                }


                /**
                MEDIA QUERIES
                */

                /* Small devices (tablets, 768px and up) */
                @media (min-width: 768px) {
                    #quote-carousel {
                        margin-bottom: 0;
                        padding: 0 40px 30px 40px;
                    }

                }

                /* Small devices (tablets, up to 768px) */
                @media (max-width: 768px) {

                    /* Make the indicators larger for easier clicking with fingers/thumb on mobile */
                    #quote-carousel .carousel-indicators {
                        bottom: -20px !important;
                    }

                    #quote-carousel .carousel-indicators li {
                        display: inline-block;
                        margin: 0px 5px;
                        width: 15px;
                        height: 15px;
                    }

                    #quote-carousel .carousel-indicators li.active {
                        margin: 0px 5px;
                        width: 20px;
                        height: 20px;
                    }
                }
            </style>

            <script>
                $(document).ready(function () {
                    //Set the carousel options
                    $('#quote-carousel').carousel({
                        pause: true,
                        interval: 4000,
                    });
                });
            </script>
        </div>
    </div>
@endsection