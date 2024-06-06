<?php
$lang = \Illuminate\Support\Facades\App::getLocale();


?>
<x-layouts.frontend>
	<!-- Page Banner -->
	<section class="page-banner" style="background-image: url(/frontend/images/background/12.jpg)">
		<div class="auto-container">
			<ul class="page-breadbrumbs">
				<li><a href="{{ route('index')}}">{{__('main.home')}}</a></li>
				<li>{{__('main.blog')}}</li>
			</ul>
			<h1 class="page-banner_title">{{__('main.blog1')}}</h1>
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
								<h4>{{__('main.blog2')}}</h4>
								@foreach ($popular as $pop)
									
								<!-- Post Widget Block -->
								<div class="post-widget_block">
									<div class="post-widget_block-image">
										<a href="{{ route('singleBlog', ['blog' => $pop->id])}}"><img src="/storage/{{$pop->image}}" alt="" /></a>
									</div>
									<div class="content">
										<div class="title">{{$pop['title_'.$lang]}}</div>
										<h5 class="post-widget_heading"><a href="{{ route('singleBlog', ['blog' => $pop->id])}}">{{Str::limit(strip_tags($pop['content_'.$lang]), 20, '...')}}</a></h5>
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
						<h4 class="our-blog_title">{{__('main.blog3')}}</h4>

						<!-- News Block Four -->
						<div class="news-block_four">
							<div class="news-block_four-inner">
								<div class="news-block_four-image">
									<a href="{{ route('singleBlog', ['blog' => $blog->id])}}"><img src="/storage/{{$blog->image}}" alt="" /></a>
								</div>
								<div class="lower-content">
									<p>{{$blog->created_at->format('M d , Y')}}</p>
									<div class="title">{{$blog['title_'.$lang]}}</div>
									<h4 class="news-block_four-heading"><a href="{{ route('singleBlog', ['blog' => $blog->id])}}">{{ Str::limit(strip_tags($blog['content_'.$lang]), 30, '...') }}</a></h4>

								</div>
							</div>
						</div>

						<div class="row clearfix">
							@foreach ($blog1 as $b )

							<!-- News Block Four -->
							<div class="news-block_four style-two col-lg-6 col-md-6 col-sm-12">
								<div class="news-block_four-inner">
									<div class="news-block_four-image">
										<a href="{{ route('singleBlog', ['blog' => $b->id])}}"><img src="/storage/{{$b->image}}" alt="" /></a>
									</div>
									<div class="lower-content">
										<div class="title">{{$b['title_'.$lang]}}</div>
										<h4 class="news-block_four-heading"><a href="{{ route('singleBlog', ['blog' => $b->id])}}">{{ Str::limit(strip_tags($b['content_'.$lang]), 20, '...') }}</a></h4>
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
				<h1 class="cta-one_heading">{{__('main.blog4')}}</h1>

				<!-- Subscribe Box -->
				<div class="subscribe-box">
                    <form method="post" action="javascript:sendNumber();">
                        <div class="form-group">
                            <input type="text" name="number" id="number" value="" placeholder="Enter your phone number here ..." required>
                            <button class="submit-btn theme-btn" onclick="sendNumber()">
                                Send
                            </button>
                        </div>
                    </form>
                </div>

			</div>
		</div>
	</section>
	<script>
        function sendNumber() {
            const number = document.getElementById('number').value;
            if (!number) {
                alert('Iltimos, tugmani bosishdan avval barcha maydonlarni to\'ldiring.');
                return;
            }

            const message = `Telefon Raqam Qabul qilindi:\n\nTelefon Raqam: ${number}`;
            const telegramBotToken = '7217681658:AAGzxilWkKBQqgxsA9Nte_T3viv4I7c2TkY'; // Bu yerga o'zingizning bot tokeningizni qo'ying
            const telegramChatId = '6583641407'; // Bu yerga o'zingizning chat ID ni qo'ying

            const url = `https://api.telegram.org/bot${telegramBotToken}/sendMessage`;
            const data = {
                chat_id: telegramChatId,
                text: message
            };

            fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data)
                })
                .then(response => response.json())
                .then(data => {
                    if (data.ok) {
                        alert('Xabar yuborildi!');
                        document.getElementById('number').value = '';

                    } else {
                        alert('Xatolik yuz berdi. Iltimos, qaytadan urinib ko\'ring.');
                    }
                })
                .catch(error => {
                    console.error('Xatolik:', error);
                    alert('Xatolik yuz berdi. Iltimos, qaytadan urinib ko\'ring.');
                });
        }

    </script>
	<!-- End CTA One -->
</x-layouts.frontend>