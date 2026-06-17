@extends('layouts.admin')

@section ('content')


<div class="row">
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title mb-5 d-inline">Create your new Branch</h5>
    <form method="POST" action="{{route ('branches.store')}}" enctype="multipart/form-data">
          <!-- Email input -->
          @csrf
          <div class="form-outline mb-4 mt-4">
            <input type="text" name="name" id="form2Example1" class="form-control" placeholder="name" required />
           
          </div>

          <div class="form-outline mb-4 mt-4">
            <input type="file" name="image" id="form2Example1" class="form-control" placeholder="image" required/>
           
          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" placeholder="Input your new Branch Description" required></textarea>
          </div>

          <div class="form-outline mb-4 mt-4">
            <label for="exampleFormControlTextarea1">Location</label>

            <input type="text" name="location" id="form2Example1" class="form-control" placeholder="Input the Location" required/>
           
          </div>


          <!-- Submit button -->
          <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">create</button>

    
        </form>

      </div>
    </div>
  </div>
</div>
@endsection