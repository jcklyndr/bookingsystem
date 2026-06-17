@extends('layouts.admin')

@section ('content')


<div class="row">
  <div class="col">
    <div class="card">
      <div class="card-body">
        @if(session('update'))
        <div class="alert alert-success">
            {{ session('update') }}
        </div>
    @endif

        @if(session('deletebook'))
        <div class="alert alert-success">
            {{ session('deletebook') }}
        </div>
    @endif
        <h5 class="card-title mb-4 d-inline">Bookings</h5>
      
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Check In</th>
              <th scope="col">Check Out</th>
              <th scope="col">Phone Number</th>
              <th scope="col">name</th>
              <th scope="col">Branch Name</th>
              <th scope="col">Roomspa Name</th>
              <th scope="col">Status</th>
              <th scope="col">Payment</th>
              <th scope="col">Booking</th>
              <th scope="col">Change Status</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($bookings as $book)

            <tr>
              <td>{{$book->checkin}}</td>
              <td>{{$book->checkout}}</td>
              <td>{{$book->phone_number}}</td>
              <td>{{$book->name}}</td>
              <td>{{$book->branchname}}</td>
              <td>{{$book->roomspaname}}</td>
              <td>{{$book->status}}</td>
              <td>PHP {{$book->price}}</td>
              <td>{{$book->created_at}}</td>

              <td><a href="{{route ('bookings.updatestatus', $book->id)}}" class="btn btn-warning text-center text-white">Change status</a>
            
               <td><a href="{{route('bookings.delete', $book->id)}}" class="btn btn-danger  text-center" onclick="return confirm('Are you sure you want to delete this booking?')">Delete</a></td>
            </tr>

            @endforeach

          </tbody>
        </table> 
      </div>
    </div>
  </div>
</div>
@endsection