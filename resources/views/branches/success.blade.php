@extends('layouts.app')

@section('content')


<div class="hero-wrap js-fullheight" style="margin-top:-25px; background-image: url('{{asset ('assets/images/room-3.jpg')}}');">
  <div class="overlay"></div>
  <section class="ftco-section ftco-book ftco-no-pt ftco-no-pb">
    <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
      <div class="col-md-7 ftco-animate">
        <h2 class="subheading">You have successfully booked this spa service. Please check your email or phone for details as we process your booking shortly. Thank you!</h2>
        <h1 class="mb-4"></h1>
        <p><a href="{{route ('home')}}" class="btn btn-primary-custom">Go Home</a> </p>
      </div>
    </div>
  </div>
</div>

</section>
@endsection