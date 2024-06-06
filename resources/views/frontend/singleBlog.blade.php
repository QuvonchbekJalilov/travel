<?php
$lang = \Illuminate\Support\Facades\App::getLocale();


?>
<x-layouts.frontend>
    <!-- Page Banner -->
	<section class="page-banner_two" style="background-image: url(/frontend/images/background/13.jpg)">
		<div class="auto-container">
			<ul class="page-breadbrumbs">
				<li><a href="#">Home</a></li>
				<li>blog</li>
			</ul>
			<h2 class="page-banner_two-title">{{$blog['title_'.$lang]}}</h2>
			<div class="page-banner_two-author">
				<div class="d-flex align-items-center flex-wrap">
					
					{{$blog->created_at->format('m D, Y')}}
				</div>
			</div>
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

						<!-- Search Box -->
						<div class="sidebar-widget">
							<div class="search-box">
								<form method="post" action="contact.html">
									<div class="form-group">
										<input type="search" name="search-field" value="" placeholder="Search..." required>
										<button type="submit"><span class="icon fa fa-search"></span></button>
									</div>
								</form>
							</div>
						</div>

						<!-- Post Widget -->
						<div class="sidebar-widget post-widget">
							<div class="widget-content">
								<h4>POPULAR</h4>
                                @foreach ( $popular as $pop)
								<!-- Post Widget Block -->
								<div class="post-widget_block">
									<div class="post-widget_block-image">
										<a href="{{ route('singleBlog', ['blog' => $pop->id])}}"><img src="images/resource/post-thumb-1.jpg" alt="" /></a>
									</div>
									<div class="content">
										<div class="title">{{$pop['title_'.$lang]}}</div>
										<h5 class="post-widget_heading"><a href="{{ route('singleBlog', ['blog' => $pop->id])}}">{{ Str::limit(strip_tags($pop['content_'.$lang]), 20, '...')}}</a></h5>
										<div class="post-widget_date">{{$pop->created_at->format('m D, Y')}}</div>
									</div>
								</div>
                                @endforeach
							</div>
						</div>

					</aside>
				</div>

				<!-- Content Side -->
                <div class="content-side right-sidebar col-lg-8 col-md-12 col-sm-12">
                	<div class="blog-detail">
						<div class="inner-box">
							<h4 class="blog-detail_title"><span>{{$blog->id}}.</span> {{$blog['title_'.$lang]}}</h4>
							<div class="image">
								<img src="/storage/{{$blog->image}}" alt="" />
							</div>
							<p>{{strip_tags($blog['content_'.$lang])}}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	<!-- End CTA One -->
</x-layouts.frontend>