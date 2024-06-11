<?php
$lang = \Illuminate\Support\Facades\App::getLocale();
?>

<x-layouts.frontend>
    <style>
        .btn-buy {
            width: 270px;
            margin-left: -20px !important;
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
                                    <div class="col-lg-7 col-md-7 col-sm-12">
                                        <button class="book-block_two-btn theme-btn btn-buy" type="button" data-toggle="modal" data-target="#bookingModal">{{ __('main.book') }}</button>
                                        <button class="book-block_two-btn theme-btn btn-buy" type="button" data-toggle="modal" style="background-color: #67B7D1;" data-target="#paymentModal" onClick="updatePriceInUZS()">{{ __('main.buy_now') }}</button>

                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Tour Detail -->
    <!-- Payment Modal -->
    <div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="paymentModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="paymentModalLabel">{{ __('main.package') }}</h5>
                </div>
                <div class="modal-body">
                    <form class="tp-form-wrap form-group" onsubmit="addZero()" method="post" action="https://checkout.paycom.uz">
                        <input type="hidden" name="merchant" value="651fab902072915c770444f9">
                        <div class="row text-center">
                            <div class="col-md-12">
                                <label class="w-75 text-start single-input-wrap style-two">
                                    <span class=" single-input-title text-dark">Ism: </span>
                                    <input class=" form-control py-2" name="account[name]" type="text" placeholder="Ismingizni kiriting" required>
                                </label>
                            </div>
                            <div class="col-md-12 mt-3 py-2">
                                <label class="w-75 text-start single-input-wrap style-two">
                                    <span class="single-input-title text-dark">Telefon raqam: </span>
                                    <input class="form-control py-2" name="account[phone]" type="text" placeholder="raqamingizni kiriting" required>
                                </label>
                            </div>
                            <div class="col-lg-12 my-3 ">
                                <label class="single-input-wrap style-two border">
                                    <span class="px-2 single-input-title text-dark">Sum: </span>
                                    <input class=" p-3 bg-white " type="text" disabled id="total" value="" required>
                                    <input class="p-4" type="hidden" id="totalReal" name="amount">
                                </label>
                            </div>
                            <div class="col-12 d-flex justify-content-between">
                                <button type="submit"  class="btn btn-primary">{{ __('main.pay_now') }}</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">{{ __('main.close') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Booking Modal -->
    <div class="modal fade" id="bookingModal" tabindex="-1" role="dialog" aria-labelledby="bookingModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bookingModalLabel">{{ __('main.book') }}</h5>

                </div>
                <div class="modal-body">
                    <form id="bookingForm" onsubmit="send(); return false;"> <!-- Call send() function on form submission -->
                        <div class="row">
                            <div class="col-lg-12">
                                <h3>{{$tour['title_'.$lang]}}</h3>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="firstName">{{ __('main.first_name') }}</label>
                                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="lastName">{{ __('main.last_name') }}</label>
                                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="phoneNumber">{{ __('main.phone_number') }}</label>
                                    <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Phone Number" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="tickets">{{ __('main.number_of_tickets') }}</label>
                                    <input type="number" class="form-control" id="tickets" name="tickets" min="1" value="1" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="totalPrice">{{ __('main.total_price') }}</label>
                                    <input type="text" class="form-control" id="totalPrice" name="totalPrice" value="{{$tour->price}} $" readonly>
                                </div>
                            </div>
                            <input type="hidden" id="tourTitle" name="tourTitle" value="{{ $tour['title_'.$lang] }}">
                            <input type="hidden" id="tourPrice" name="tourPrice" value="{{ $tour->price }}">
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary">{{ __('main.submit') }}</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('main.close') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        
            // Function to fetch the exchange rate and update the converted price
            function updatePriceInUZS() {
                // API endpoint for exchange rate
                const apiUrl = 'https://api.exchangerate-api.com/v4/latest/USD';

                // Fetch exchange rate from the API
                fetch(apiUrl)
                    .then(response => response.json())
                    .then(data => {
                        const exchangeRate = data.rates.UZS;
                        const priceInUSD = parseFloat("{{ ($tour->price) }}");
                        const priceInUZS = priceInUSD * exchangeRate;

                        // Log the conversion details to the console (optional)
                        console.log("Exchange Rate:", exchangeRate);
                        console.log("Price in USD:", priceInUSD);
                        console.log("Price in UZS:", priceInUZS);

                        // Update the input field with the converted price
                        document.getElementById('total').value = priceInUZS.toFixed(2);
                        document.getElementById('totalReal').value = priceInUZS.toFixed(2)*100;

                    })
                    .catch(error => console.error('Error fetching exchange rate:', error));
            }

            // Attach the function to the "Buy Now" button click event
            document.getElementById('paymentModal').addEventListener('show.bs.modal', function() {
                updatePriceInUZS();
            });

    </script>


    <script>
        $(document).ready(function() {
            // Function to fetch the exchange rate and update the converted price
            // function updatePriceInUZS() {
            //     // API endpoint for exchange rate
            //     const apiUrl = 'https://api.exchangerate-api.com/v4/latest/USD';

            //     // Fetch exchange rate from the API
            //     fetch(apiUrl)
            //         .then(response => response.json())
            //         .then(data => {
            //             const exchangeRate = data.rates.UZS;
            //             const priceInUSD = Number("{{ json_encode($tour->price) }}");
            //             const priceInUZS = priceInUSD * exchangeRate;

            //             // Log the conversion details to the console (optional)
            //             console.log("Exchange Rate:", exchangeRate);
            //             console.log("Price in USD:", priceInUSD);
            //             console.log("Price in UZS:", priceInUZS);

            //             // Update the input field with the converted price
            //             $('#total').val(priceInUZS.toFixed(2));
            //         })
            //         .catch(error => console.error('Error fetching exchange rate:', error));
            // }


            // // Attach the function to the "Buy Now" button click event
            // $('#paymentModal').on('show.bs.modal', function() {
            //     updatePriceInUZS();
            // });
        });

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
            document.getElementById('totalPrice').value = totalPrice;
        });

        $('#bookingModal').on('shown.bs.modal', function() {
            $('#tickets').trigger('input'); // Trigger input event to set initial total price
        });
    </script>
</x-layouts.frontend>