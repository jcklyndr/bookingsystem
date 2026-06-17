@extends('layouts.admin')

@section ('content')

<div class="row">
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title mb-5 d-inline">Create new Roomspa</h5>
    <form method="POST" action="{{route ('roomspa.store')}}" enctype="multipart/form-data">
        @csrf
          <!-- Email input -->
          <div class="form-outline mb-4 mt-4">
            <input type="text" name="name" id="form2Example1" class="form-control" placeholder="name of the Spa Service" required/>
           
          </div>
          <div class="form-outline mb-4 mt-4">
            <input type="file" name="image" id="form2Example1" class="form-control" />
           
          </div> 
          <div class="form-outline mb-4 mt-4">
            <input type="text" name="spaservice" id="form2Example1" class="form-control" placeholder="Spa Service offered" required/>
           
          </div> 
          <div class="form-row mb-4 mt-4">
            <div class="col">
                <input type="text" name="currency_code" id="form2Example1" class="form-control" placeholder="currency_code" required/>
            </div>
            <div class="col">
                <input type="text" name="price" id="form2Example2" class="form-control" placeholder="price" required/>
            </div>
        </div>
        
           <div class="form-outline mb-4 mt-4">
            <input type="text" name="maxpeeps" id="form2Example1" class="form-control" placeholder="max persons" required/>
           
          </div> 
          <div class="form-outline mb-4 mt-4">
            <input type="text" name="bed" id="form2Example1" class="form-control" placeholder="number of beds" required/>

          </div> 
         <div class="form-outline mb-4 mt-4">
          <input type="text" name="view" id="form2Example1" class="form-control" placeholder="view" required/>
         
         </div> 
         <select name="branch_id" class="form-control" required>
          <option disabled selected>Choose Branch of SpaServices</option>
          @foreach ( $branches as $branch )

          <option value="{{$branch->id}}">{{$branch->name}}</option>
          

          @endforeach
         </select>
         <br>


          <!-- Submit button -->
          <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">create</button>

    
        </form>

      </div>
    </div>
  </div>
</div>
@endsection