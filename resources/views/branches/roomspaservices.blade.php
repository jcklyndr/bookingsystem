@extends('layouts.app')

@section('content')

<section class="hero-wrap hero-wrap-2 hero-wrapcustomspaservice" style="margin-top:-25px; background-image: url('{{asset('assets/images/image_2.jpg')}}');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <b style="color:#fff;" class="font-size-1">Current Available</b>
        <h1 class="mb-0 bread">Room & Spa Services</h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section bg-light ftco-no-pt ftco-no-pb">
  <div class="container-fluid px-md-0">
    <div class="row no-gutters">
      @foreach ($getroomspaservices as $sparooms)
      <div class="col-lg-6">
        <div class="room-wrap d-md-flex">
            <a href="{{route('branches.roomspaservices.details', $sparooms->id)}}" class="img" style="background-image:url('{{ asset('assets/images/'.$sparooms->image) }}');"></a>
            <div class="half left-arrow d-flex align-items-center">
                <div class="text p-4 p-xl-5 text-center">
                    <p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
                    <p class="mb-0"><span class="price mr-1">{{$sparooms->price}}/Session</p>
                    <h3 class="mb-3"><a href="{{route('branches.roomspaservices.details', $sparooms->id)}}" style="text-decoration: none">{{$sparooms->spaservice}}</a></h3>
                    <ul class="list-accomodation">
                      <li><span>Max:</span> {{$sparooms->maxpeeps}} Persons</li>
                      <li><span>Room Type:</span> {{$sparooms->name}}</li>
                      <li><span>View:</span> {{$sparooms->view}}</li>
                      <li><span>Bed:</span> {{$sparooms->bed}}</li>
                      <li><span>Price:</span> {{$sparooms->price}}</li>
                  </ul>
                    <p class="pt-1"><a href="{{route('branches.roomspaservices.details', $sparooms->id)}}" class="btn btn-primary px-3 py-2">View Details <span class="icon-long-arrow-right"></span></a></p>
                </div>
            </div>
        </div>
    </div>
    @endforeach

  </div>
  </div>
</section>

@endsection