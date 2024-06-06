<?php
$lang = \Illuminate\Support\Facades\App::getLocale();

?>

<x-layouts.frontend>
    <!-- Page Banner -->
    <section class="page-banner" style="background-image: url('/frontend/images/background/14.jpg')">
        <div class="auto-container">
            <ul class="page-breadbrumbs">
                <li><a href="#">{{ __('main.home') }}</a></li>
                <li>{{ __('main.about') }}</li>
            </ul>
            <h1 class="page-banner_title">{{ __('main.about') }}</h1>
        </div>
    </section>
    <!-- End Page Banner -->

    <!-- About Two -->
    <section class="">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12 col-sm-12 px-3">
                    <img src="/storage/{{$about->image}}" style="border-radius:15px" alt="" class="img-fluid">
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="about-two_text">{!! $about['content_'.$lang] !!}</div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Two -->



    <!-- Feature One -->
    <section class="feature-one style-three">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">

                    <!-- Feature Block One -->
                    <div class="feature-block_one col-lg-3 col-md-6 col-sm-12">
                        <div class="feature-block_one-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="feature-block_one-icon flaticon-smile-1"></div>
                            <h5 class="feature-block_one-title">{{__('main.sentence6')}}</h5>
                            <div class="feature-block_one-text">{{__('main.sentence7')}}</div>
                        </div>
                    </div>

                    <!-- Feature Block One -->
                    <div class="feature-block_one col-lg-3 col-md-6 col-sm-12">
                        <div class="feature-block_one-inner wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
                            <div class="feature-block_one-icon flaticon-mountain"></div>
                            <h5 class="feature-block_one-title">{{__('main.sentence8')}}</h5>
                            <div class="feature-block_one-text">{{__('main.sentence9')}}</div>
                        </div>
                    </div>

                    <!-- Feature Block One -->
                    <div class="feature-block_one col-lg-3 col-md-6 col-sm-12">
                        <div class="feature-block_one-inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="feature-block_one-icon flaticon-flags"></div>
                            <h5 class="feature-block_one-title">{{__('main.sentence10')}}</h5>
                            <div class="feature-block_one-text">{{__('main.sentence11')}}</div>
                        </div>
                    </div>

                    <!-- Feature Block One -->
                    <div class="feature-block_one col-lg-3 col-md-6 col-sm-12">
                        <div class="feature-block_one-inner wow fadeInLeft" data-wow-delay="450ms" data-wow-duration="1500ms">
                            <div class="feature-block_one-icon flaticon-clock"></div>
                            <h5 class="feature-block_one-title">{{__('main.sentence12')}}</h5>
                            <div class="feature-block_one-text">{{__("main.sentence13")}}.</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Feature One -->

    <!-- Trip One -->
    <section class="trip-one">
        <div class="auto-container">
            <div class="inner-container">
                <!-- Trip Info Tabs -->
                <div class="trip-info-tabs">
                    <!-- Trip Tabs -->
                    <div class="trip-tabs tabs-box">

                        <!-- Tab Btns -->
                        <ul class="tab-btns tab-buttons clearfix">
                            <li data-tab="#trip-one" class="tab-btn flaticon-route active-btn"></li>
                            <li data-tab="#trip-two" class="tab-btn flaticon-calendar-3"></li>
                            <li data-tab="#trip-three" class="tab-btn flaticon-luggage"></li>
                            <li data-tab="#trip-four" class="tab-btn flaticon-airplane"></li>
                        </ul>

                        <!-- Tabs Container -->
                        <div class="tabs-content">

                            <!-- Tab / Active Tab -->
                            <div class="tab active-tab" id="trip-one">
                                <div class="content">
                                    <div class="image">
                                        <div class="overlay-box">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h4><a href="{{ route('tour')}}">{{__('main.about1')}}</a></h4>
                                                <div class="text">{{__('main.about2')}}<br> {{__('main.about3')}}</div>
                                            </div>
                                            <h4><a href="{{ route('tour')}}">{{__('main.trip')}}</a></h4>
                                            <a href="https://www.pexels.com/video/l-2942803/" class="trip_play lightbox-video"><span class="flaticon-play"><i class="ripple"></i></span></a>
                                        </div>
                                        <img src="/frontend/images/resource/trip-6.jpg" alt="" />
                                    </div>
                                </div>
                            </div>

                            <!-- Tab -->
                            <div class="tab" id="trip-two">
                                <div class="content">
                                    <div class="image">
                                        <div class="overlay-box">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h4><a href="{{ route('tour')}}">{{__('main.about1')}}</a></h4>
                                                <div class="text">{{__('main.about2')}}<br> {{__('main.about3')}}</div>
                                            </div>
                                            <h4><a href="{{ route('tour')}}">{{__('main.trip')}}</a></h4>
                                            <a href="https://www.pexels.com/video/l-2942803/" class="trip_play lightbox-video"><span class="flaticon-play"><i class="ripple"></i></span></a>
                                        </div>
                                        <img src="/frontend/images/resource/trip-5.jpg" alt="" />
                                    </div>
                                </div>
                            </div>

                            <!-- Tab -->
                            <div class="tab" id="trip-three">
                                <div class="content">
                                    <div class="image">
                                        <div class="overlay-box">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h4><a href="{{ route('tour')}}">{{__('main.about1')}}</a></h4>
                                                <div class="text">{{__('main.about2')}}<br> {{__('main.about3')}}</div>

                                            </div>
                                            <h4><a href="{{ route('tour')}}">{{__('main.trip')}}</a></h4>
                                            <a href="https://www.pexels.com/video/l-2942803/" class="trip_play lightbox-video"><span class="flaticon-play"><i class="ripple"></i></span></a>
                                        </div>
                                        <img src="/frontend/images/resource/trip-8.jpg" alt="" />

                                    </div>
                                </div>
                            </div>
                            <!-- Tab -->
                            <div class="tab" id="trip-four">
                                <div class="content">
                                    <div class="image">
                                        <div class="overlay-box">
                                            <div class="d-flex justify-content-between align-items-center">
                                            <h4><a href="{{ route('tour')}}">{{__('main.about1')}}</a></h4>
                                                <div class="text">{{__('main.about2')}}<br> {{__('main.about3')}}</div>
                                            </div>
                                            <h4><a href="{{ route('tour')}}">{{__('main.trip')}}</a></h4>
                                            <a href="https://www.pexels.com/video/l-2942803/" class="trip_play lightbox-video"><span class="flaticon-play"><i class="ripple"></i></span></a>
                                        </div>
                                        <img src="/frontend/images/resource/trip-7.jpg" alt="" />
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- End Trip One -->

</x-layouts.frontend>