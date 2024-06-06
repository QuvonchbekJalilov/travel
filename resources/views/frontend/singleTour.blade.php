
<?php
$lang = \Illuminate\Support\Facades\App::getLocale();


?>
<x-layouts.frontend>
    <!-- Page Banner -->
	<section class="page-banner" style="background-image: url(/frontend/images/background/9.jpg)">
		<div class="auto-container">
			<ul class="page-breadbrumbs">
				<li><a href="#">Home</a></li>
				<li>tours</li>
				<li>maxico</li>
			</ul>
			<h1 class="page-banner_title">BEACH VACATION IN CANCUN</h1>
		</div>
	</section>
	<!-- End Page Banner -->

	

	<!-- Tour Detail -->
	<section class="tour-detail">
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Column -->
				<div class="column col-lg-8 col-md-12 col-sm-12">

                    <img src="/storage/{{$tour->image}}" style="height:400px;width:100%; border-radius:14px;" alt="">
                    <div class="text my-3 tour-package_title" ><h3>{{ ($tour['title_'.$lang])}}</h3></div>

                    <div class="text">
                        {!! $tour['content_'.$lang] !!}
                    </div>
                    <div><a class="book-block_two-btn theme-btn" href="tour-booking.html">Book Now</a></div>

				</div>
				<!-- Column -->
				<div class="column col-lg-4 col-md-12 col-sm-12">
					<div class="tour-package">
						<h2 class="tour-package_title">Tour Package Details</h2>
						<div class="row clearfix">
							<div class="col-lg-7 col-md-7 col-sm-12">
								<ul class="tour-package_list">
									<li><span class="icon fas fa-map-marker-alt fa-fw"></span>{{$tour['title_'.$lang]}}</li>
									<li><span class="icon fas fa-dollar-sign fa-fw"></span>Start from {{$tour->price}}$</li>
									<li><span class="icon fas fa-clock fa-fw"></span>{{$tour->day}} Days</li>
								</ul>
							</div>
							
						</div>
					</div>
				</div>
			</div>

			

			

		</div>
	</section>
	<!-- End Tour Detail -->
</x-layouts.frontend>