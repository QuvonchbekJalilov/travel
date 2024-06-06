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
                            <h5 class="feature-block_one-title">Customer Delight</h5>
                            <div class="feature-block_one-text">We deliver the best service and experience for our customer.</div>
                        </div>
                    </div>

                    <!-- Feature Block One -->
                    <div class="feature-block_one col-lg-3 col-md-6 col-sm-12">
                        <div class="feature-block_one-inner wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
                            <div class="feature-block_one-icon flaticon-mountain"></div>
                            <h5 class="feature-block_one-title">Authentic Adventure</h5>
                            <div class="feature-block_one-text">We deliver the real adventure experience for our dear customer.</div>
                        </div>
                    </div>

                    <!-- Feature Block One -->
                    <div class="feature-block_one col-lg-3 col-md-6 col-sm-12">
                        <div class="feature-block_one-inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="feature-block_one-icon flaticon-flags"></div>
                            <h5 class="feature-block_one-title">Expert Guides</h5>
                            <div class="feature-block_one-text">We deliver only expert tour guides for our dear customer.</div>
                        </div>
                    </div>

                    <!-- Feature Block One -->
                    <div class="feature-block_one col-lg-3 col-md-6 col-sm-12">
                        <div class="feature-block_one-inner wow fadeInLeft" data-wow-delay="450ms" data-wow-duration="1500ms">
                            <div class="feature-block_one-icon flaticon-clock"></div>
                            <h5 class="feature-block_one-title">Time Flexibility</h5>
                            <div class="feature-block_one-text">We welcome time flexibility of traveling for our dear customer.</div>
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
                                                <h4><a href="#">HOW IT WORKS</a></h4>
                                                <div class="text">We book the necessary hotel, transport, <br> and unique tourist attraction for your trip.</div>
                                            </div>
                                            <h1><a href="tour-booking.html">Trip Planning</a></h1>
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
                                                <h4><a href="#">HOW IT WORKS</a></h4>
                                                <div class="text">We book the necessary hotel, transport, <br> and unique tourist attraction for your trip.</div>
                                            </div>
                                            <h1><a href="tour-booking.html">Trip Booking</a></h1>
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
                                                <h4><a href="#">HOW IT WORKS</a></h4>
                                                <div class="text">We book the necessary hotel, transport, <br> and unique tourist attraction for your trip.</div>
                                            </div>
                                            <h1><a href="tour-booking.html">Trip Preparation</a></h1>
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
                                                <h4><a href="#">HOW IT WORKS</a></h4>
                                                <div class="text">We book the necessary hotel, transport, <br> and unique tourist attraction for your trip.</div>
                                            </div>
                                            <h1><a href="tour-booking.html">Trip <br> Experience</a></h1>
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
        </div>
    </section>
    <!-- End Trip One -->

    <!-- Team One -->
    <section class="team-one">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2 class="sec-title_heading">MEET OUR TEAM</h2>
            </div>
            <div class="masonry-items-container_two row clearfix">

                @foreach($blog as $b)
                    <!-- Team Block One -->
                    <div class="team-block_one masonry-item col-lg-4 col-md-6 col-sm-12">
                        <div class="team-block_one-inner">
                            <div class="team-block_one-image">
                                <img src="{{ asset('storage/' . $b->image) }}" alt="" />
                                <div class="team-block_one-content">
                                    <h4 class="team-block_one-heading"><a href="#">{{ $b['job_' . $lang] }}</a></h4>
                                    <div class="team-block_one-name">{{ $b->name }}</div>
                                    <div class="team-block_one-text">“{{ $b['description_' . $lang] }}”</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                    <!-- Team Block One -->
                    @foreach($blogs1 as $b1)
                        <div class="team-block_one masonry-item col-lg-4 col-md-6 col-sm-12">
                            <div class="team-block_one-inner">
                                <div class="team-block_one-image">
                                    <img src="{{ asset('storage/' . $b1->image) }}" alt="" />
                                    <div class="team-block_one-content">
                                        <h4 class="team-block_one-heading"><a href="#">{{ $b1['job_' . $lang] }}</a></h4>
                                        <div class="team-block_one-name">{{ $b1->name }}</div>
                                        <div class="team-block_one-text">“{{ $b1['description_' . $lang] }}”</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <!-- Team Block One -->
                    @foreach($blog2 as $b2)
                        <div class="team-block_one masonry-item col-lg-8 col-md-12 col-sm-12">
                            <div class="team-block_one-inner">
                                <div class="team-block_one-image">
                                    <img src="{{ asset('storage/' . $b2->image) }}" alt="" />
                                    <div class="team-block_one-content">
                                        <h4 class="team-block_one-heading"><a href="#">{{ $b2['job_' . $lang] }}</a></h4>
                                        <div class="team-block_one-name">{{ $b2->name }}</div>
                                        <div class="team-block_one-text">“{{ $b2['description_' . $lang] }}”</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                @foreach($blog3 as $b3)
                        <!-- Team Block One -->
                        <div class="team-block_one masonry-item col-lg-8 col-md-12 col-sm-12">
                            <div class="team-block_one-inner">
                                <div class="team-block_one-image">
                                    <img src="{{ asset('storage/' . $b3->image) }}" alt="" />
                                    <div class="team-block_one-content">
                                        <h4 class="team-block_one-heading"><a href="#">{{ $b3['job_' . $lang] }}</a></h4>
                                        <div class="team-block_one-name">{{ $b3->name }}</div>
                                        <div class="team-block_one-text">“{{ $b3['description_' . $lang] }}”</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach

                @foreach($blog4 as $b4)
                        <!-- Team Block One -->
                        <div class="team-block_one masonry-item col-lg-4 col-md-6 col-sm-12">
                            <div class="team-block_one-inner">
                                <div class="team-block_one-image">
                                    <img src="{{ asset('storage/' . $b4->image) }}" alt="" />
                                    <div class="team-block_one-content">
                                        <h4 class="team-block_one-heading"><a href="#">{{ $b4['job_' . $lang] }}</a></h4>
                                        <div class="team-block_one-name">{{ $b4->name }}</div>
                                        <div class="team-block_one-text">“{{ $b4['description_' . $lang] }}”</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- End Team One -->

    <!-- Contact One -->
    <section class="contact-one">
        <div class="auto-container">
            <div class="contact-one_pattern" style="background-image: url(images/icons/pattern-1.png)"></div>
            <!-- Sec Title -->
            <div class="sec-title">
                <h2 class="sec-title_heading">CONTACT INFORMATION</h2>
            </div>
            <div class="row clearfix">
                <!-- Column -->
                <div class="column col-lg-6 col-md-6 col-sm-12">
                    <div class="title">phone</div>
                    <a href="tel:+1-555-555-555">+1-555-555-555</a>
                </div>
                <!-- Column -->
                <div class="column col-lg-6 col-md-6 col-sm-12">
                    <div class="title">email</div>
                    <a href="mailto:info@vacasky.com">info@vacasky.com</a>
                </div>
                <!-- Column -->
                <div class="column col-lg-6 col-md-6 col-sm-12">
                    <div class="title">address</div>
                    <div class="text">123 Anywhere Street, Any City, Canada</div>
                </div>
                <!-- Column -->
                <div class="column col-lg-6 col-md-6 col-sm-12">
                    <!-- Button Box -->
                    <div class="button-box text-right">
                        <a class="btn-style-two theme-btn" href="contact.html">
                            <div class="btn-wrap">
                                <span class="text-one">CONTACT US</span>
                                <span class="text-two">CONTACT US</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Map One -->
            <div class="map-one">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805184.6331292129!2d144.49266890254142!3d-37.97123689954809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2s!4v1574408946759!5m2!1sen!2s" allowfullscreen=""></iframe>
            </div>
            <!-- End Map One -->

        </div>
    </section>
    <!-- End Contact One -->

    <!-- CTA One -->
    <section class="cta-one" style="background-image: url(images/background/2.jpg)">
        <div class="auto-container">
            <!-- Title Box -->
            <div class="cta-one_title-box">
                <h1 class="cta-one_heading">start your adventure</h1>
                <div class="cta-one_text">Sign up for our newsletter and receive exclusive travel deals, insider tips, and destination <br> inspiration. Don't miss out on the adventure - join our mailing list today!</div>

                <!-- Subscribe Box -->
                <div class="subscribe-box">
                    <form method="post" action="contact.html">
                        <div class="form-group">
                            <input type="email" name="email" value="" placeholder="Enter your email address here ..." required>
                            <button class="submit-btn theme-btn">
                                Subscribe
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- End CTA One -->
</x-layouts.frontend>