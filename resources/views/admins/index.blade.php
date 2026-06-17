@extends('layouts.admin')

@section('content')

<div class="row">
  <div class="col-md-6 p-4">
    <div class="card p-3">
      <div class="card-body">
        <h5 class="card-title">Branches</h5>
        <p class="card-text">Number of Branches: {{$branchesCount}}</p>
      </div>
    </div>
  </div>

  <div class="col-md-6 p-4">
    <div class="card p-3">
      <div class="card-body">
        <h5 class="card-title">Rooms and Spa Services</h5>
        <p class="card-text">Number of Rooms and Spa Services: {{$servicesCount}}</p>
      </div>
    </div>
  </div>

  <div class="col-md-6 p-4">
    <div class="card p-3">
      <div class="card-body">
        <h5 class="card-title">Admins</h5>
        <p class="card-text">Number of Admins: {{$adminsCount}}</p>
      </div>
    </div>
  </div>
  <div class="col-md-6 p-4">
    <div class="card p-3">
      <div class="card-body">
        <h5 class="card-title">Bookings</h5>
        <p class="card-text">Number of Bookings: {{$bookingsCount}}</p>
      </div>
    </div>
  </div>
</div>

@endsection
