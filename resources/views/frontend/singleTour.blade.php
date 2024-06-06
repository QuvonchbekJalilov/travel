<?php
$lang = \Illuminate\Support\Facades\App::getLocale();
?>

<x-layouts.frontend>
    <style>
        .btn-buy {
            width: 200px;
            margin-left: -30px !important;
        }
    </style>
    <!-- Page Banner -->
    <section class="page-banner" style="background-image: url(/frontend/images/background/9.jpg)">
        <div class="auto-container">
            <ul class="page-breadcrumbs">
                <li><a href="{{ route('index') }}">{{ __('main.home') }}</a></li>
            </ul>
            <h1 class="page-banner_title">{!! $tour['title_'.$lang] !!}</h1>
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
                    <div class="text my-3 tour-package_title">
                        <h3>{{ ($tour['title_'.$lang]) }}</h3>
                    </div>
                    <div class="text">
                        {!! $tour['content_'.$lang] !!}
                    </div>
                </div>
                <!-- Column -->
                <div class="column col-lg-4 col-md-12 col-sm-12">
                    <div class="tour-package">
                        <h2 class="tour-package_title">{{ __('main.package') }}</h2>
                        <div class="row clearfix">
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <ul class="tour-package_list">
                                    <li><span class="icon fas fa-map-marker-alt fa-fw"></span>{{ $tour['title_'.$lang] }}</li>
                                    <li><span class="icon fas fa-dollar-sign fa-fw"></span>{{ __('main.start') }} {{ $tour->price }}$</li>
                                    <li><span class="icon fas fa-clock fa-fw"></span>{{ $tour->day }} {{ __('main.day') }}</li>
                                    <button class="book-block_two-btn theme-btn btn-buy" type="submit" data-toggle="modal" data-target="#bookingModal">{{ __('main.book') }}</button>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Tour Detail -->

    <!-- Booking Modal -->
    <div class="modal fade" id="bookingModal" tabindex="-1" role="dialog" aria-labelledby="bookingModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bookingModalLabel">{{ __('main.book') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="bookingForm" onsubmit="send(); return false;"> <!-- Call send() function on form submission -->
                        <h3>{{$tour['title_'.$lang]}}</h3>
                        <div class="form-group">
                            <label for="firstName">{{ __('main.first_name') }}</label>
                            <input type="text" class="form-control" id="firstName" required>
                        </div>
                        <div class="form-group">
                            <label for="lastName">{{ __('main.last_name') }}</label>
                            <input type="text" class="form-control" id="lastName" required>
                        </div>
                        <div class="form-group">
                            <label for="phoneNumber">{{ __('main.phone_number') }}</label>
                            <input type="text" class="form-control" id="phoneNumber" required>
                        </div>
                        <div class="form-group">
                            <label for="tickets">{{ __('main.number_of_tickets') }}</label>
                            <input type="number" class="form-control" id="tickets" min="1" value="1" required>
                        </div>
                        <div class="form-group">
                            <label for="totalPrice">{{ __('main.total_price') }}</label>
                            <input type="text" class="form-control" value="{{$tour->price}} $" id="totalPrice" readonly>
                        </div>
                        <input type="hidden" id="tourTitle" value="{{ $tour['title_'.$lang] }}">
                        <input type="hidden" id="tourPrice" value="{{ $tour->price }}">
                        <button type="submit" class="btn btn-primary">{{ __('main.submit') }}</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('main.close') }}</button>
                        <!-- Submit button -->
                    </form>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>

    <script>
        function send() {
            const firstName = document.getElementById('firstName').value; // Get first name
            const lastName = document.getElementById('lastName').value; // Get last name
            const phoneNumber = document.getElementById('phoneNumber').value; // Get phone number
            const tickets = document.getElementById('tickets').value; // Get number of tickets
            const totalPrice = document.getElementById('totalPrice').value; // Get total price
            const tourTitle = document.getElementById('tourTitle').value; // Get tour title
            const tourPrice = document.getElementById('tourPrice').value; // Get tour price

            const message = `Booking Details:\n\nName: ${firstName} ${lastName}\nPhone Number: ${phoneNumber}\nNumber of Tickets: ${tickets}\nTotal Price: ${totalPrice}\nTour Title (Uzbek): ${tourTitle}\nTour Price: ${tourPrice}`;
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


    <!-- End Booking Modal -->

    <!-- Include Bootstrap JS and dependencies (jQuery, Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <!-- Custom JS for Modal -->
    <script>
        document.getElementById('tickets').addEventListener('input', function() {
            const ticketCount = this.value;
            const pricePerTicket = document.getElementById('tourPrice').value;
            const totalPrice = ticketCount * pricePerTicket;
            document.getElementById('totalPrice').value = totalPrice + ' $';
        });

        $('#bookingModal').on('shown.bs.modal', function() {
            $('#tickets').trigger('input'); // Trigger input event to set initial total price
        });
    </script>
</x-layouts.frontend>