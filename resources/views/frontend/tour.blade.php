<?php
$lang = \Illuminate\Support\Facades\App::getLocale();

use Illuminate\Support\Str;


?>
<x-layouts.frontend>
	<!-- Page Banner -->
	<section class="page-banner" style="background-image: url(/frontend/images/background/7.jpg)">
		<div class="auto-container">
			<ul class="page-breadbrumbs">
				<li><a href="#">Home</a></li>
				<li>tours</li>
			</ul>
			<h1 class="page-banner_title">TOUR PACKAGES</h1>
		</div>
	</section>
	<!-- End Page Banner -->

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
								<img src="/storage/{{$tour->image}}" alt="">
								<div class="overlay-box_two">
									<div class="overlay-box_two-inner">
										<h4><a href="destination-details.html">{{ $tour['title_'.$lang]}}</a></h4>
										<div class="d-flex align-items-center flex-wrap justify-content-center">
											<div class="gallery-block_two-location">20 Packages</div>
											<div class="gallery-block_two-price">{{ $tour->price}} - {{ $tour->price + 500}}</div>
										</div>
										<div class="gallery-block_two-text-two">{{ strip_tags($tour['content_'.$lang])}}</div>
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

	<!-- Footer -->
	</x-layouts.frontend>	