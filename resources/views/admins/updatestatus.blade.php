@extends('layouts.admin')

@section('content')

<div class="row">
  <div class="col">
    <div class="card">
      <div class="card-body">
        <div class="card-body">

        <h5 class="card-title mb-5 d-inline" style="color: rgb(174, 91, 12)"> Update Status</span></h5>
        <p> Current Status: <b>{{$booking->status}}</b></p>
        <form method="POST" action="{{route ('bookings.updatedstatus', $booking->id)}}" enctype="multipart/form-data"> 
         @csrf
         
         <select name="status" class="form-control" required>
          <option value="" disabled selected>Update Status</option>

          <option value="Processing">Processing</option>
          <option value="Booked Successfully">Booked Successfully</option>

         </select>
         <br>

          <!-- Submit button -->
          <button type="submit" name="submit" class="btn btn-primary mb-4 text-center">Update</button>
        </form>

      </div>
    </div>
  </div>
</div>

@endsection
