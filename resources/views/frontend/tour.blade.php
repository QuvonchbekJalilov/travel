<?php
$lang = \Illuminate\Support\Facades\App::getLocale();

use Illuminate\Support\Str;


?>
<x-layouts.frontend>
	<!-- Page Banner -->
	<section class="page-banner" style="background-image: url(/frontend/images/background/7.jpg)">
		<div class="auto-container">
			<ul class="page-breadbrumbs">
				<li><a href="#">{{__('main.home')}}</a></li>
				<li>{{__('main.tour')}}</li>
			</ul>
			<h1 class="page-banner_title">{{__('main.tour1')}}</h1>
		</div>
	</section>
	<!-- End Page Banner -->

	<section class="gallery-five">
		<div class="auto-container">
			<div class="page-header d-flex align-items-center justify-content-between flex-wrap flex-md-nowrap gap-2 gap-md-5">
				<!-- Gallery Five Title Box -->
				<div class="gallery-five_title-box">
					<h4>{{__('main.tour2')}}</h4>
				</div>
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
											<div class="gallery-block_two-price">{{ $tour->price}} - {{ $tour->price + 500}}</div>
										</div>
										<div class="gallery-block_two-text-two">{{ Str::limit(strip_tags($tour['content_'.$lang]), 30 ,'...')}}</div>
										<div class="gallery-block_two-button">
											<a class="theme-btn learn-btn" href="{{ route('singleTour', ['tour' => $tour->id])}}">{{__('main.learn')}}</a>
										</div>
									</div>
								</div>
								<div class="overlay-box">
									<div class="overlay-content">
										<h3 class="gallery-block_two-title"><a href="destination-details.html">{{ $tour['title_'.$lang]}}</a></h3>
										<div class="d-flex align-items-center flex-wrap">
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
			{{ $tours->links()}}
		</div>
	</section>

	<!-- Footer -->
</x-layouts.frontend>