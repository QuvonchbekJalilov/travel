<?php
$lang = \Illuminate\Support\Facades\App::getLocale();


?>
<x-layouts.frontend>
	<!-- Page Banner -->
	<section class="page-banner" style="background-image: url(/frontend/images/background/12.jpg)">
		<div class="auto-container">
			<ul class="page-breadbrumbs">
				<li><a href="{{ route('index')}}">Home</a></li>
				<li>blog</li>
			</ul>
			<h1 class="page-banner_title">TRAVEL BLOG</h1>
		</div>
	</section>
	<!-- End Page Banner -->

	<!-- Sidebar Page Container -->
	<div class="sidebar-page-container left-sidebar">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Sidebar Side -->
				<div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
					<aside class="sidebar">


						<!-- Post Widget -->
						<div class="sidebar-widget post-widget">
							<div class="widget-content">
								<h4>POPULAR</h4>
								@foreach ($popular as $pop)
									
								<!-- Post Widget Block -->
								<div class="post-widget_block">
									<div class="post-widget_block-image">
										<a href="blog-details.html"><img src="/storage/{{$pop->image}}" alt="" /></a>
									</div>
									<div class="content">
										<div class="title">{{$pop['title_'.$lang]}}</div>
										<h5 class="post-widget_heading"><a href="blog-details.html">{{Str::limit(strip_tags($pop['content_'.$lang]), 20, '...')}}</a></h5>
										<div class="post-widget_date">{{$pop->created_at->format('M D, Y')}}</div>
									</div>
								</div>
								@endforeach

								

								

							</div>
						</div>

					</aside>
				</div>

				<!-- Content Side -->
				<div class="content-side right-sidebar m-0 col-lg-8 col-md-12 col-sm-12">
					<div class="our-blog">
						<h4 class="our-blog_title">RECENT ARTICLES</h4>

						<!-- News Block Four -->
						<div class="news-block_four">
							<div class="news-block_four-inner">
								<div class="news-block_four-image">
									<a href="blog-details.html"><img src="/storage/{{$blog->image}}" alt="" /></a>
								</div>
								<div class="lower-content">
									<p>{{$blog->created_at->format('M d , Y')}}</p>
									<div class="title">{{$blog['title_'.$lang]}}</div>
									<h4 class="news-block_four-heading"><a href="blog-details.html">{{ Str::limit(strip_tags($blog['content_'.$lang]), 30, '...') }}</a></h4>

								</div>
							</div>
						</div>

						<div class="row clearfix">
							@foreach ($blog1 as $b )

							<!-- News Block Four -->
							<div class="news-block_four style-two col-lg-6 col-md-6 col-sm-12">
								<div class="news-block_four-inner">
									<div class="news-block_four-image">
										<a href="blog-details.html"><img src="/storage/{{$b->image}}" alt="" /></a>
									</div>
									<div class="lower-content">
										<div class="title">{{$b['title_'.$lang]}}</div>
										<h4 class="news-block_four-heading"><a href="blog-details.html">{{ Str::limit(strip_tags($b['content_'.$lang]), 20, '...') }}</a></h4>
									</div>
								</div>
							</div>
							@endforeach
						</div>
						{{$blog1->links()}}
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- CTA One -->
	<section class="cta-one" style="background-image: url(/frontend/images/background/2.jpg)">
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