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

    <section class="gallery-five">
		<div class="auto-container">
			<div class="page-header d-flex align-items-center justify-content-between flex-wrap flex-md-nowrap gap-2 gap-md-5">
				<!-- Gallery Five Title Box -->
				<div class="gallery-five_title-box">
					<h4>OUR TOUR PACKAGES</h4>
				</div>
			</div>

			<div id="collapseFilter" class="collapse">
				<form method="post" action="">
					<div class="card search-filter mb-5 p-3">
						<div class="card-body">
							<div class="row">
								<div class="col-lg-4 col-md-4">
									<div class="widget">
										<h6 class="widget-title">Enter Tour Name</h6>
										<div class="filter-search">
											<div class="form-group">
												<input type="search" name="search-field" value="" placeholder="Search..." required="">
												<button type="submit"><span class="icon fa fa-search"></span></button>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-4">
									<div class="widget">
										<h6 class="widget-title">Tour Type</h6>
										<div class="filter-hotel">
											<select class="select-default w-100 border border-1 border-opacity-10 select2-hidden-accessible" data-select2-id="select2-data-1-skr9" tabindex="-1" aria-hidden="true">
												<option data-select2-id="select2-data-3-6u40"></option>
												<option value="1">Adventure</option>
												<option value="2">Desert</option>
												<option value="3">Beach</option>
											</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-2-kb0i" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-sn2f-container" aria-controls="select2-sn2f-container"><span class="select2-selection__rendered" id="select2-sn2f-container" role="textbox" aria-readonly="true" title="Select Option"><span class="select2-selection__placeholder">Select Option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-4">
									<div class="widget">
										<h6 class="widget-title">Custom Price Range</h6>
										<div class="filter-price-range">
											<div id="slider-range" class="price-filter-range ui-slider ui-corner-all ui-widget ui-widget-content ui-slider-horizontal" name="rangeInput"><div class="ui-slider-range ui-corner-all ui-widget-header" style="width: 50%; left: 25%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 25%;"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 75%;"></span></div>
										
											<div class="value_field d-flex align-items-center justify-content-between mt-2">
											<input type="number" min="10" max="2090" id="min_price" class="text-start bg-transparent" disabled="" readonly="">
											<input type="number" min="15" max="2100" id="max_price" class="text-end bg-transparent" disabled="" readonly="">
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-4">
									<div class="widget">
										<h6 class="widget-title">Style</h6>
										<div class="filter-style"> 
											
												<div class="form-check">
													<label for="checkbox1">Luxury</label>
													<input type="checkbox" class="form-check-input" name="checkbox1" value="">
													<span class="content_count">12</span>
												</div>                                
												<div class="form-check">
													<label for="checkbox2">Suite</label>
													<input type="checkbox" class="form-check-input" name="checkbox2" checked="" value="">
													<span class="content_count">09</span>
												</div>
												<div class="form-check">
													<label for="checkbox3">Mid-Range</label>
													<input type="checkbox" class="form-check-input" name="checkbox3" value="">
													<span class="content_count">18</span>
												</div>
												<div class="form-check">
													<label for="checkbox4">Business</label>
													<input type="checkbox" class="form-check-input" name="checkbox4" value="">
													<span class="content_count">28</span>
												</div>
											
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-4">
									<div class="widget">
										<h6 class="widget-title">Category</h6>
										<div class="filter-category"> 
											<form action="" method="post">
												<div class="form-check">
													<label for="checkbox1">Motel</label>
													<input type="checkbox" class="form-check-input" name="checkbox1" value="">
													<span class="content_count">26</span>
												</div>                                
												<div class="form-check">
													<label for="checkbox2">Resort</label>
													<input type="checkbox" class="form-check-input" name="checkbox2" checked="" value="">
													<span class="content_count">18</span>
												</div>
												<div class="form-check">
													<label for="checkbox3">Banglow</label>
													<input type="checkbox" class="form-check-input" name="checkbox3" value="">
													<span class="content_count">15</span>
												</div>
												<div class="form-check">
													<label for="checkbox4">Suite</label>
													<input type="checkbox" class="form-check-input" name="checkbox4" value="">
													<span class="content_count">32</span>
												</div>
											</form>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-4">
									<div class="widget">
										<h6 class="widget-title">Amenities</h6>
										<div class="filter-amenities"> 
											<form action="" method="post">
												<div class="form-check">
													<label for="checkbox1">Breakfast Included</label>
													<input type="checkbox" class="form-check-input" name="checkbox1" value="">
													<span class="content_count">26</span>
												</div>                                
												<div class="form-check">
													<label for="checkbox2">Swiming Pool</label>
													<input type="checkbox" class="form-check-input" name="checkbox2" checked="" value="">
													<span class="content_count">18</span>
												</div>
												<div class="form-check">
													<label for="checkbox3">Free Wifi</label>
													<input type="checkbox" class="form-check-input" name="checkbox3" value="">
													<span class="content_count">15</span>
												</div>
												<div class="form-check">
													<label for="checkbox4">Air Condition</label>
													<input type="checkbox" class="form-check-input" name="checkbox4" value="">
													<span class="content_count">32</span>
												</div>
											</form>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-4">
									<div class="widget">
										<h6 class="widget-title">Star Type</h6>
										<div class="filter-rating"> 
											<form action="" method="post">
												<div class="row m-0">
													<div class="form-check col-auto p-0 pe-1">
														<input type="checkbox" class="btn-check" name="checkbox1" value="">
														<label for="checkbox1" class="btn">5 <i class="fa fa-star"></i></label>
													</div>                                
													<div class="form-check col-auto p-0 pe-1">
														<input type="checkbox" class="btn-check" name="checkbox2" value="">
														<label for="checkbox2" class="btn">4 <i class="fa fa-star"></i></label>
													</div>
													<div class="form-check col-auto p-0 pe-1">
														<input type="checkbox" class="btn-check" name="checkbox3" value="">
														<label for="checkbox3" class="btn">3 <i class="fa fa-star"></i></label>
													</div>
													<div class="form-check col-auto p-0 pe-1">
														<input type="checkbox" class="btn-check" name="checkbox4" value="">
														<label for="checkbox4" class="btn">2 <i class="fa fa-star"></i></label>
													</div>
													<div class="form-check col-auto p-0 p-0">
														<input type="checkbox" class="btn-check" name="checkbox5" value="">
														<label for="checkbox5" class="btn">1 <i class="fa fa-star"></i></label>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-4">
									<div class="widget">
										<h6 class="widget-title">Guest Rating</h6>
										<div class="filter-rating"> 
											<form action="" method="post">
												<div class="row m-0">
													<div class="form-check col-auto p-0 pe-1">
														<input type="checkbox" class="btn-check" name="checkbox1" value="">
														<label for="checkbox1" class="btn">4.5+ <i class="fa fa-star"></i></label>
													</div>                                
													<div class="form-check col-auto p-0 pe-1">
														<input type="checkbox" class="btn-check" name="checkbox2" value="">
														<label for="checkbox2" class="btn">4 <i class="fa fa-star"></i></label>
													</div>
													<div class="form-check col-auto p-0 pe-1">
														<input type="checkbox" class="btn-check" name="checkbox3" value="">
														<label for="checkbox3" class="btn">3.5 <i class="fa fa-star"></i></label>
													</div>
													<div class="form-check col-auto p-0 pe-1">
														<input type="checkbox" class="btn-check" name="checkbox4" value="">
														<label for="checkbox4" class="btn">3 <i class="fa fa-star"></i></label>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-4">
									<button type="submit" class="btn-style-two theme-btn">
										<span class="btn-wrap">
											<span class="text-one">Search</span>
											<span class="text-two">Search</span>
										</span>
									</button>
								</div>
							</div>
						</div>
					</div></form>
				
			</div>

			<!-- MixitUp Galery -->
            <div class="mixitup-gallery">
                
                <div class="filter-list row clearfix" id="MixItUpF66489">
					@foreach ($tours as $tour )
						
					<!-- Gallery Block Two -->
					<div class="gallery-block_two style-two all mix design cloud seasonal col-lg-4 col-md-6 col-sm-12" style="display: inline-block;">
						<div class="gallery-block_two-inner">
							<div class="gallery-block_two-image">
								<img src="http://127.0.0.1:8000/frontend/images/resource/counter.jpg" alt="">
								<div class="overlay-box_two">
									<div class="overlay-box_two-inner">
										<h4><a href="destination-details.html">{{ $tour['title_'.$lang]}}</a></h4>
										<div class="d-flex align-items-center flex-wrap justify-content-center">
											<div class="gallery-block_two-location">20 Packages</div>
											<div class="gallery-block_two-price">{{ $tour->price}} - {{ $tour->price + 500}}</div>
										</div>
										<div class="gallery-block_two-text-two">{{ Str::limit(strip_tags($tour['content_'.$lang]), 30 ,'...')}}</div>
										<div class="gallery-block_two-button">
											<a class="theme-btn learn-btn" href="{{ route('singleTour', ['tour' => $tour->id])}}">Learn More</a>
										</div>
									</div>
								</div>
								<div class="overlay-box">
									<div class="overlay-content">
										<h3 class="gallery-block_two-title"><a href="destination-details.html">{{ $tour['title_'.$lang]}}</a></h3>
										<div class="d-flex align-items-center flex-wrap">
											<div class="gallery-block_two-location">20 Packages</div>
											<div class="gallery-block_two-price">{{ $tour->price}} - {{ $tour->price + 500}}</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Gallery Block Two -->
					@endforeach

				</div>
			</div>
		</div>
	</section>
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