@extends('layouts.admin')

<!--@@section('content')-->

<div class="container" style="margin-top:12%;padding:auto">
  <div class="row justify-content-middle" style="margin-left: 300px;">
        <div class="card" style="width:70%">
            <div class="card-body" style="width: 100%">
                <h5 class="card-title mt-5" style="text-align: center">Login Admin</h5>
                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <form method="POST" class="p-auto" action="{{ route('see.login') }}">
                    @csrf
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" name="email" id="form2Example1" class="form-control" placeholder="Email" />
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" name="password" id="form2Example2" placeholder="Password" class="form-control" required />
                    </div>

                    <!-- Submit button -->
                    <div class="col-md-12">
                          <input type="submit" value="Login" id="btn" class="btn btn-primary py-3 px-4" style="width: 100%; padding-right: 10px;padding-left: 10px;background-color: #3498db;border:#3498db">                         
                      </div>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--@@endsection-->
