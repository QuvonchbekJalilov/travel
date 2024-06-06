<x-layouts.frontend>
    <!-- Page Banner -->
    <section class="page-banner" style="background-image: url(/frontend/images/background/18.jpg)">
        <div class="auto-container">
            <ul class="page-breadbrumbs">
                <li><a href="{{ route('index')}}">{{ __('main.home') }}</a></li>
                <li>{{ __('main.contact') }}</li>
            </ul>
            <h1 class="page-banner_title">{{ __('main.contact') }}</h1>
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
                        <h4>{{__('main.contact1')}}</h4>
                    </div>

                    <!-- Contact Form -->
                    <div class="booking-form">
                        <form method="post" action="javascript:sendPhone();">
                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="form-label">{{__('main.name')}}</label>
                                        <input type="text" id="full_name" name="full_name" placeholder="Full Name" required>
                                    </div>
                                </div>



                                <div class="col-lg-6">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="form-label">{{__('main.email')}}</label>
                                        <input type="email" id="email" name="email" placeholder="Email Address" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="form-label">{{__('main.number')}}</label>
                                        <input type="text" id="phone_number" name="phone_number" placeholder="Phone Number" value="+998">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label class="form-label">{{__('main.text')}}</label>
                                        <textarea id="description" name="description" placeholder="Enter Text"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <button type="submit" class="btn-style-two theme-btn" onclick="sendphone()">
                                        <span class="btn-wrap">
                                            <span class="text-one">{{__('main.sendMes')}}</span>
                                            <span class="text-two">{{__('main.sendMes')}}</span>
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
                <h1 class="cta-one_heading">{{__('main.blog4')}}</h1>

                <!-- Subscribe Box -->
                <div class="subscribe-box">
                    <form method="post" action="javascript:sendNumber();">
                        <div class="form-group">
                            <input type="text" name="number" id="number" value="" placeholder="Enter your phone number here ..." required>
                            <button class="submit-btn theme-btn" onclick="sendNumber()">
                                {{__('main.send')}}
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- End CTA One -->


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

        function sendphone() {
            const phone_number = document.getElementById('phone_number').value;
            const full_name = document.getElementById('full_name').value;
            const email = document.getElementById('email').value;
            const description = document.getElementById('description').value;

            if (!full_name || !phone_number || !email) {
                alert('Iltimos, tugmani bosishdan avval barcha maydonlarni to\'ldiring.');
                return;
            }

            const message = `A contact form submission has been received:\n\nFull Name: ${full_name}\nPhone Number: ${phone_number}\nEmail: ${email}\nDescription: ${description}`;
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
                        document.getElementById('full_name').value = '';
                        document.getElementById('phone_number').value = '';
                        document.getElementById('email').value = '';
                        document.getElementById('description').value = '';
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
</x-layouts.frontend>