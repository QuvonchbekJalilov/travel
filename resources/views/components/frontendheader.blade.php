<?php
$lang = \Illuminate\Support\Facades\App::getLocale();
?>
<style>
    /* Custom Modal Styles */
    .modal-content {
        border-radius: 10px;
        border: none;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
    }

    .modal-header {
        background-color: #007bff;
        color: white;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .modal-header .close {
        color: white;
        opacity: 1;
    }

    .modal-body {
        padding: 2rem;
    }

    .modal-body .form-group {
        margin-bottom: 1.5rem;
    }

    .modal-body input.form-control {
        border-radius: 5px;
        border: 1px solid #ced4da;
        padding: .75rem 1rem;
        font-size: 1rem;
    }

    .modal-body label {
        font-weight: bold;
        color: #495057;
    }

    .modal-footer {
        border-top: none;
        padding: 1rem 2rem;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        padding: .75rem 1.5rem;
        font-size: 1rem;
        border-radius: 5px;
    }

    .btn-secondary {
        padding: .75rem 1.5rem;
        font-size: 1rem;
        border-radius: 5px;
    }

    .btn-primary:hover,
    .btn-primary:focus {
        background-color: #0056b3;
        border-color: #004085;
    }

    .btn-secondary:hover,
    .btn-secondary:focus {
        background-color: #5a6268;
        border-color: #4e555b;
    }
</style>
<!-- Main Header -->
<header class="header header_style_one">
    <div class="middle_bar">
        <div class="auto-container">
            <div class="middle_bar_inner d-flex align-items-center justify-content-center justify-content-between gap-4 flex-wrap">
                <!-- Logo -->
                <div class="logo">
                    <a href="{{ route('index')}}" class="logo_default">
                        <img src="/frontend/images/MiracleTourLogo.png" alt="img" style="height:50px">
                    </a>
                </div>
                <div class="mainnav d-none d-lg-block">
                    <ul class="main_menu">
                        <li class="menu-item"><a href="{{ route('index')}}">{{__('main.home')}}</a></li>
                        <li class="menu-item"><a href="/about">{{__('main.about')}}</a></li>
                        <li class="menu-item"><a href="{{ route('tour')}}">{{__('main.tour')}}</a></li>
                        <li class="menu-item"><a href="{{route('blog')}}">{{__('main.blog')}}</a></li>
                        <li class="menu-item"><a href="{{route('contact')}}">{{__('main.contact')}}</a></li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#">
                                @if($lang == 'en')
                                Language: en
                                @endif
                                @if($lang == 'ru')
                                язык: ru
                                @endif
                                @if($lang == 'uz')
                                Til: uz
                                @endif
                            </a>
                            <ul class="sub-menu">
                                <li><a class="dropdown-item" href="/ru">РУС</a></li>
                                <li><a class="dropdown-item" href="/uz">UZB</a></li>
                                <li><a class="dropdown-item" href="/en">ENG</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div>
                    <button class="btn btn-warning" style="color: white;" type="button" data-toggle="modal" data-target="#bookingModal">{{__('main.book')}} <i class='fab fa-telegram-plane' style='font-size:18px'></i></button>
                </div>
                <div class="other_elements_wrapper d-flex align-items-center gap-4">
                    <!-- Mobile Menu Toggle Button -->
                    <div class="mr_menu_toggle d-lg-none">
                        <span class="toggle_line"></span>
                        <span class="toggle_line"></span>
                        <span class="toggle_line"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Sticky/Fixed Nav -->

<!-- Mobile Responsive Menu -->
<div class="mr_menu d-lg-none">
    <button type="button" class="mr_menu_close"><i class="fa fa-times"></i></button>
    <div class="logo"></div> <!-- Keep this div empty. Logo will come here by JavaScript -->
    <div class="mr_navmenu"></div> <!-- Keep this div empty. Menu will come here by JavaScript -->
</div>
<!-- End Main Header -->

<!-- Booking Modal -->
<!-- Booking Modal -->
<!-- Booking Modal -->
<div class="modal fade" id="bookingModal" tabindex="-1" role="dialog" aria-labelledby="bookingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bookingModalLabel">{{ __('main.book') }}</h5>
                
            </div>
            <div class="modal-body">
                <form id="bookingForm" onsubmit="send(); return false;">
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="Full_name">{{ __('main.first_name') }}</label>
                                <input type="text" class="form-control" id="Full_name" name="firstName" placeholder="{{ __('main.first_name') }}" required>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="phoneNumber">{{ __('main.phone_number') }}</label>
                                <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="{{ __('main.phone_number') }}" required>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="message">{{ __('main.text') }}</label>
                                <input type="text" class="form-control" id="message" name="tickets" placeholder="{{ __('main.text') }}" required>
                            </div>
                        </div>
                        <div class="col-lg-12 text-right">
                            <button type="submit" class="btn btn-primary">{{ __('main.submit') }}</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('main.close') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- Include necessary scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
    function send() {
        const Full_name = document.getElementById('Full_name').value; // Get first name
        const phoneNumber = document.getElementById('phoneNumber').value; // Get phone number
        const message_user = document.getElementById('message').value; // Get number of tickets

        const message = `Band Qilish uchu:\n\nIsm: ${Full_name}\nTelefon Raqm: ${phoneNumber}\nXabar: ${message_user}`;
        const telegramBotToken = '7217681658:AAGzxilWkKBQqgxsA9Nte_T3viv4I7c2TkY'; // Replace with your Telegram Bot Token
        const telegramChatId = '6583641407'; // Replace with your Telegram Chat ID

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
                    alert('Booking details sent successfully!');
                    document.getElementById('bookingForm').reset(); // Reset form fields
                } else {
                    alert('Error sending booking details. Please try again.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Error sending booking details. Please try again.');
            });
    }
</script>