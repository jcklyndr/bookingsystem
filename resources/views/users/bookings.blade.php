@extends('layouts.app')

@section('content')
<section class="hero-wrap js-halfheight mb-5 p-5 bg-light">
<div class="container">
      <div class="col-md-12">
        <div class="wrapper">
          <div class="row no-gutters">
          <div class="text-center pb-3">
        <h1 >My Bookings</h1>
      </div>
            <div class="col-lg-12 col-md-7 d-flex align-items-stretch">
  <table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Check-In Date</th>
            <th scope="col">Check-In Time</th>
            <th scope="col">Check-Out Date</th>
            <th scope="col">Check-Out Time</th>
            <th scope="col">Days</th>
            <th scope="col">Price</th>
            <th scope="col">Roomspa Name</th>
            <th scope="col">Branch Name</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
    @foreach($bookings as $booking)
            <tr>
                <th scope="row">{{ $booking->name }}</th>
                <td>{{ $booking->email }}</td>
                <td>{{ $booking->phone_number }}</td>
                <td>{{ $booking->checkin }}</td>
                <td>{{ $booking->checkin_time }}</td> <!-- Add Check-In Time -->
                <td>{{ $booking->checkout }}</td>
                <td>{{ $booking->checkout_time }}</td> <!-- Add Check-Out Time -->
                <td>{{ $booking->days }}</td>
                <td>{{ $booking->price }}</td>
                <td>{{ $booking->roomspaname }}</td>
                <td>{{ $booking->branchname }}</td>
                <td>{{ $booking->status }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
              <!-- </div>
            {{-- <p><a href="{{route ('home')}}" class="btn btn-primary">Go Home</a> </p> --}}
          </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  
@endsection