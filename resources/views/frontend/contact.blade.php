<x-layouts.frontend>
    <!-- Page Banner -->
	<section class="page-banner" style="background-image: url(/frontend/images/background/18.jpg)">
		<div class="auto-container">
			<ul class="page-breadbrumbs">
				<li><a href="{{ route('index')}}">Home</a></li>
				<li>Contact</li>
			</ul>
			<h1 class="page-banner_title">Contact</h1>
		</div>
	</section>
	<!-- End Page Banner -->

	<!-- Gallery Five -->
	<section class="booking-one">
		<div class="auto-container">

			<div class="row clearfix">

				<!-- Contact Column -->
				<div class="contact-column col-lg-8 col-md-7 col-sm-12">
                    <div class="title-box">
                        <h4>Send Us Mail</h4>
                        <p>Your email address will not be published. Required fields are marked *</p>
                    </div>

					<!-- Contact Form -->
					<div class="booking-form">
                        <form method="post" action="contact.html">
                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="form-label">First Name</label>
                                        <input type="text" name="f-name" placeholder="First Name" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" name="l-name" placeholder="Last Name">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="form-label">Email Address</label>
                                        <input type="email" name="email" placeholder="Email Address" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="form-label">Phone Number</label>
                                        <input type="number" name="phone" placeholder="Phone Number">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="form-label">Enter Text</label>
                                        <textarea name="text" placeholder="Enter Text"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <button type="submit" class="btn-style-two theme-btn">
                                        <span class="btn-wrap">
                                            <span class="text-one">Send Message</span>
                                            <span class="text-two">Send Message</span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
				</div>

				<!-- Map Column -->
				<div class="map-column col-lg-4 col-md-5 col-sm-12">
					<!-- Map Four -->
					<div class="map-four">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805184.6331292129!2d144.49266890254142!3d-37.97123689954809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2s!4v1574408946759!5m2!1sen!2s" allowfullscreen=""></iframe>
					</div>
					<!-- End Map Two -->
				</div>

			</div>
		</div>
	</section>
	<!-- End Gallery Five -->

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