@extends('layouts.app')

@section('content')

<div class="hero-wrap js-fullheight" style="margin-top:-25px; background-image: url('{{asset ('assets/images/paymentbg.jpg')}}');">
  <div class="container pb-4">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
      <div class="col-md-7 ftco-animate noborderbook">
        <div class="booking-details bookdetails">
        <h4 class="h1style rgbblue">Your Booking Details</h4>
            <hr>
            <p><span class="rgbblue">Name: {{ $bookingDetails['name'] }}</span></p>
            <p><span class="rgbblue">Email: {{ $bookingDetails['email'] }}</span></p>
            <p><span class="rgbblue">Check-In: {{ $bookingDetails['checkin'] }} at {{ $bookingDetails['checkin_time'] }}</span></p>
            <p><span class="rgbblue">Check-Out: {{ $bookingDetails['checkout'] }} at {{ $bookingDetails['checkout_time'] }}</span></p>
            <p><span class="rgbblue">Branch: {{ $bookingDetails['branchname'] }}</span></p>
            <p><span class="rgbblue">Roomspaname: {{ $bookingDetails['roomspaname'] }}</span></p>
            <p><span class="rgbblue">Amount: {{ $bookingDetails['price'] }}</span></p>
            <p><span class="rgbblue">Days: {{ $bookingDetails['days'] }}</span></p>
            <hr>
          <div class="container">
          <script src="https://www.paypal.com/sdk/js?client-id={!! config('paypal.sandbox.client_id')!!}&currency=PHP"></script>
  
          <!-- PayPal button container -->
          <div id="paypal-button-container"></div>
  
          <!-- PayPal Buttons script -->
          <script>
              document.addEventListener("DOMContentLoaded", function() {
                  paypal.Buttons({
                      createOrder: function(data, actions) {
                          return fetch('{{ route('paypal.createOrder') }}', {
                              method: 'post',
                              headers: {
                                  'content-type': 'application/json',
                                  'X-CSRF-TOKEN': '{{ csrf_token() }}'
                              },
                              body: JSON.stringify({
                                  price: '{{ Session::get('price') }}'
                              })
                          }).then(function(res) {
                              return res.json();
                          }).then(function(orderData) {
                              return orderData.id;
                          });
                      },
                      onApprove: function(data, actions) {
                          return fetch('{{ route('paypal.captureOrder') }}', {
                              method: 'post',
                              headers: {
                                  'content-type': 'application/json',
                                  'X-CSRF-TOKEN': '{{ csrf_token() }}'
                              },
                              body: JSON.stringify({
                                  orderID: data.orderID
                              })
                          }).then(function(res) {
                              return res.json();
                          }).then(function(orderData) {
                              window.location.href = '{{ route('branches.success') }}';
                          });
                      }
                  }).render('#paypal-button-container');
              });
          </script>
      </div>        
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>
</div>


@endsection
