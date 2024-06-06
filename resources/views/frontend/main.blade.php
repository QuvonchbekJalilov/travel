<?php
$lang = \Illuminate\Support\Facades\App::getLocale();

use Illuminate\Support\Str;


?>
<x-layouts.frontend>
    <!-- Banner One -->
    <section class="banner-one">
        <div class="banner-one_image-layer" style="background-image: url(/frontend/images/main-slider/1.jpg)"></div>
        <div class="auto-container">
            <!-- Content Column -->
            <div class="banner-one_content">
                <div class="banner-one_content-inner">
                    <div class="banner-one_title">
                        {{__('main.sentence1')}}
                    </div>
                    <h1 class="banner-one_heading">{{__('main.sentence2')}}</h1>
                    <div class="banner-one_text">{{__('main.sentence3')}}</div>
                    <!-- Form Box -->

                    <!-- Clients Box -->
                    <div class="clients-box">
                        <!-- Sponsors Carousel -->
                        <ul class="sponsors-carousel owl-carousel owl-theme">

                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Banner One -->

    <!-- Destination One -->
    <section class="destination-one">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2 class="sec-title_heading">{{__('main.sentence4')}}</h2>
                <div class="sec-title-text">{{__('main.sentence5')}}</div>
            </div>
            <div class="row clearfix">

                <!-- Destination Block One -->
                <div class="destination-block_one col-lg-3 col-md-6 col-sm-12">
                    <div class="destination-block_one-inner">
                        <div class="destination-block_one-image">
                            <a href="hotel-details.html"><img src="/storage/{{$secondTour['image']}}" alt="" /></a>

                        </div>
                        <div class="destination-block_one-content">
                            <h3 class="destination-block_one-title"><a href="hotel-details.html">{{ $secondTour['title_'.$lang]}}</a></h3>
                            <div class="destination-block_one-title"><b>{{__('main.price')}}:</b> ${{$secondTour['price']}}</div>

                        </div>
                    </div>
                </div>

                <!-- Destination Block One -->
                <div class="destination-block_one col-lg-6 col-md-12 col-sm-12">
                    <div class="destination-block_one-inner">
                        <div class="destination-block_one-image">
                            <a href="hotel-details.html"><img src="/frontend/images/resource/destination-2.jpg" alt="" /></a>
                            <div class="destination-block_one-overlay">
                                <div class="destination-block_one-overlay-content">
                                    <h3 class="destination-block_one-title"><a href="hotel-details.html">{{ $lastTour['title_'.$lang]}}</a></h3>
                                    <div class="destination-block_one-text"><b>{{__('main.price')}}:</b> ${{ $lastTour->price}}</div>
                                    <div class="destination-block_one-text">{{ Str::limit(strip_tags($lastTour['content_'.$lang]), 60, '...') }}</div>
                                    <div class="destination-block_one-btns">
                                        <a href="hotel-details.html" class="theme-btn book-btn">Book Now</a>
                                        <a href="hotel-details.html" class="theme-btn learn-btn">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Destination Block One -->
                <div class="destination-block_one col-lg-3 col-md-6 col-sm-12">
                    <div class="destination-block_one-inner">
                        <div class="destination-block_one-image">
                            <a href="hotel-details.html"><img src="/storage/{{ $thirdTour['image']}}" alt="" /></a>
                        </div>
                        <div class="destination-block_one-content">
                            <h3 class="destination-block_one-title"><a href="hotel-details.html">{{$thirdTour['title_'.$lang]}}</a></h3>
                            <div class="destination-block_one-title"><b>{{__('main.price')}}:</b> ${{ $thirdTour->price }}</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Destination One -->

    <!-- Feature One -->
    <section class="feature-one" style="background-image: url(/frontend/images/background/19.jpg)">
        <div class="auto-container">
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
    </section>
    <!-- End Feature One -->

    

    <!-- Counter One -->
    <section class="counter-one">
        <div class="auto-container">
            <div class="inner-container">
                <div class="counter-image">
                    <img src="/frontend/images/resource/counter.jpg" alt="" />
                    <div class="counter-one_content">
                        <h2 class="counter-one_title">{{__('main.sentence14')}}</h2>
                        <div class="counter-one_text">{{__('main.sentence15')}}</div>
                    </div>
                    <div class="counter-one_lower-content">
                        <div class="counter-text_two">{{__('main.sentence16')}}</div>
                        <div class="row clearfix">

                            <!-- Counter Column -->
                            <div class="counter-one_block col-lg-3 col-md-6 col-sm-6">
                                <div class="counter-one_block-inner wow flipInX" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="counter-one_counter"><span class="odometer" data-count="20"></span>+</div>
                                    <div class="counter-one_counter-text">{{__('main.sentence17')}}</div>
                                </div>
                            </div>

                            <!-- Counter Column -->
                            <div class="counter-one_block col-lg-3 col-md-6 col-sm-6">
                                <div class="counter-one_block-inner wow flipInX" data-wow-delay="150ms" data-wow-duration="1500ms">
                                    <div class="counter-one_counter"><span class="odometer" data-count="100"></span>+</div>
                                    <div class="counter-one_counter-text">{{__('main.sentence18')}}</div>
                                </div>
                            </div>

                            <!-- Counter Column -->
                            <div class="counter-one_block col-lg-3 col-md-6 col-sm-6">
                                <div class="counter-one_block-inner wow flipInX" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <div class="counter-one_counter"><span class="odometer" data-count="10"></span>+</div>
                                    <div class="counter-one_counter-text">{{__('main.sentence19')}}</div>
                                </div>
                            </div>

                            <!-- Counter Column -->
                            <div class="counter-one_block col-lg-3 col-md-6 col-sm-6">
                                <div class="counter-one_block-inner wow flipInX" data-wow-delay="450ms" data-wow-duration="1500ms">
                                    <div class="counter-one_counter"><span class="odometer" data-count="2237"></span>+</div>
                                    <div class="counter-one_counter-text">{{__('main.sentence20')}}</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Counter One -->

    <!-- Testimonial One -->
    <section class="testimonial-one">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Testimonial One Title Column -->
                <div class="testimonial-one_title-column col-lg-4 col-md-12 col-sm-12">
                    <div class="testimonial-one_title-inner">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <h2 class="sec-title_heading">{{__('main.testimonials')}}</h2>
                            <div class="sec-title-text">{{__('main.sentence21')}}</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial One Carousel Column -->
                <div class="testimonial-one_carousel-column col-lg-8 col-md-12 col-sm-12">
                    <div class="testimonial-one_carousel-inner">
                        <div class="testimonial-one_pattern" style="background-image: url(/frontend/images/icons/pattern-1.png)"></div>
                        <div class="testimonial-carousel owl-carousel owl-theme">
                            @foreach ($reviews as $review)
                            <!-- Testimonial Block One -->
                            <div class="testimonial-block_one">
                                <div class="testimonial-block_one-inner">
                                    <div class="testimonial-block_one-text">{{strip_tags($review['text_'.$lang])}}</div>
                                    <div class="testimonial-block_one-author">
                                        <div class="testimonial-block_one-author_image">
                                            <img src="/storage/{{$review->image}}" style="height:70px" alt="" />
                                        </div>
                                        {{$review->full_name}}
                                        <span>Client from {{$review->from_country}}</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Testimonial One -->


    <!-- Achivements One -->
    <section class="achivements-one">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2 class="sec-title_heading">{{__('main.sentence22')}}</h2>
                <div class="sec-title-text">{{__('main.sentence23')}}</div>
            </div>
            <div class="achivement-carousel owl-carousel owl-theme">

                <!-- Achivement Block One -->
                <div class="achivement-block_one">
                    <div class="achivement-block_one-inner">
                        <div class="achivement-block_one-icon flaticon-award"></div>
                        <h3 class="achivement-block_one-title">{{__('main.sentence24')}}</h3>
                        <div class="achivement-block_one-text">{{__('main.sentence25')}}</div>
                    </div>
                </div>

                <!-- Achivement Block One -->
                <div class="achivement-block_one">
                    <div class="achivement-block_one-inner">
                        <div class="achivement-block_one-icon flaticon-trophy"></div>
                        <h3 class="achivement-block_one-title">{{__('main.sentence26')}}</h3>
                        <div class="achivement-block_one-text">{{__('main.sentence27')}}</div>
                    </div>
                </div>
                <!-- Achivement Block One -->
                <div class="achivement-block_one">
                    <div class="achivement-block_one-inner">
                        <div class="achivement-block_one-icon flaticon-badge"></div>
                        <h3 class="achivement-block_one-title">{{__('main.sentence28')}}</h3>
                        <div class="achivement-block_one-text">{{__('main.sentence29')}}</div>
                    </div>
                </div>

                <!-- Achivement Block One -->
                <div class="achivement-block_one">
                    <div class="achivement-block_one-inner">
                        <div class="achivement-block_one-icon flaticon-award"></div>
                        <h3 class="achivement-block_one-title">{{__('main.sentence24')}}</h3>
                        <div class="achivement-block_one-text">{{__('main.sentence25')}}</div>
                    </div>
                </div>

                <!-- Achivement Block One -->
                <div class="achivement-block_one">
                    <div class="achivement-block_one-inner">
                        <div class="achivement-block_one-icon flaticon-trophy"></div>
                        <h3 class="achivement-block_one-title">{{__('main.sentence26')}}</h3>
                        <div class="achivement-block_one-text">{{__('main.sentence27')}}</div>
                    </div>
                </div>
                <!-- Achivement Block One -->
                <div class="achivement-block_one">
                    <div class="achivement-block_one-inner">
                        <div class="achivement-block_one-icon flaticon-badge"></div>
                        <h3 class="achivement-block_one-title">{{__('main.sentence28')}}</h3>
                        <div class="achivement-block_one-text">{{__('main.sentence29')}}</div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Achivements One -->

    <!-- Faq One -->
    <section class="faq-one" style="background-image: url(/frontend/images/background/20.jpg)">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2 class="sec-title_heading">{{__('main.faq')}}</h2>
                <div class="sec-title-text">{{__('main.sentence30')}}</div>
            </div>
            <div class="faq-one_inner-container">

                <!-- Accordion Box -->
                <ul class="accordion-box">

                    @foreach ($faqs as $faq)
                        
                    <!-- Block -->
                    <li class="accordion block">
                        <div class="acc-btn">
                            <div class="icon-outer"><span class="icon fa-solid fa-angle-down fa-fw"></span></div>{{ $faq['title_'.$lang]}}
                        </div>
                        <div class="acc-content">
                            <div class="content">
                                <p>{{strip_tags($faq['text_'.$lang])}}</p>
                            </div>
                        </div>
                    </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </section>
    <!-- End Faq One -->

  

    
</x-layouts.frontend>