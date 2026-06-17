@extends('layouts.admin')

@section('content')

<div class="row">
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title mb-5 d-inline" style="color: rgb(174, 91, 12)"> --{{ $branch->name }}--</span></h5>
        
        <form method="POST" action="{{route ('branches.update', $branch->id)}}" enctype="multipart/form-data">
          @csrf
          <!-- Name input -->
          <div class="form-outline mb-4 mt-4">
            <input type="text" name="name" id="form2Example1" class="form-control" required value={{ $branch->description }} />
          </div>

          <!-- Description input -->
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" name="description" id="exampleFormControlTextarea1"  required rows="3">{{ $branch->description }}</textarea>
          </div>

          <!-- Location input -->
          <div class="form-outline mb-4 mt-4">
            <label for="exampleFormControlTextarea1">Location</label>
            <input type="text" name="location" id="form2Example1" class="form-control"  required value="{{ $branch->location }}" />
          </div>

          <!-- Submit button -->
          <button type="submit" name="submit" class="btn btn-primary mb-4 text-center">Update</button>
        </form>

      </div>
    </div>
  </div>
</div>

@endsection
