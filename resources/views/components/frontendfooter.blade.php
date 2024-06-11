<footer class="main-footer">
	<div class="auto-container">
		<!-- Upper Box -->
		<div class="upper-box">
			<div class="d-flex align-items-center justify-content-between flex-wrap">
				<div style="color:white;">
					<a href="tel:937777777" style="color:white"><h6> phone number: +998 (93) 777-77-77
					</h6></a>
				</div>
				<div class="footer-logo"><a href="{{ route('index')}}"><img src="images/logo.svg" alt="" title=""></a></div>
				<ul class="footer-nav">
					<li><a href="{{ route('tour')}}">Tours</a></li>
					<li><a href="{{ route('about')}}">About</a></li>
					<li><a href="{{ route('blog')}}">Blog</a></li>
					<li><a href="{{ route('contact')}}">Contact</a></li>
				</ul>
				<!-- Social Box -->
				<div class="footer-social_box">
					<a href="https://www.facebook.com/people/%D0%A2%D1%83%D1%80-%D0%B0%D0%B3%D0%B5%D0%BD%D1%82%D1%81%D1%82%D0%B2%D0%BE-Miracle-tour" class="fab fa-facebook fa-fw"></a>
					<a href="https://t.me/miracle_touruz" class="fab fa-telegram-plane fa-fw"></a>
					<a href="https://www.instagram.com/miracle_tour.uz/" class="fab fa-instagram fa-fw"></a>
				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="d-flex align-items-center justify-content-between flex-wrap">
				<div class="copyright">{{__('main.footer1')}} &copy; <a href="https://dora.uz" target="_blank" style="color:white;">{{ __('main.dora')}}</a> {{__('main.footer2')}}</div>

			</div>
		</div>

	</div>
</footer>