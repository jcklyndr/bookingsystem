@extends('layouts.admin')

@section('content')

<div class="row">
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title mb-5 d-inline" style="color: rgb(174, 91, 12)"> --{{ $admin->name }}--</span></h5>
        
        <form method="POST" action="{{ route('admins.update', $admin->id) }}" enctype="multipart/form-data">
          @csrf
          <div class="form-outline mb-4 mt-4">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required value="{{ $admin->name }}" />
          </div>

          <div class="form-outline mb-4 mt-4">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required value="{{ $admin->email }}" />
          </div>


          <div class="form-outline mb-4">
            <label for="password">New Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="password" required minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,}" />
            <small id="passwordHelpBlock" class="form-text text-muted">
              Your password must be at least 8 characters long, contain at least one uppercase letter, one lowercase letter, one number, and one special character.
            </small>
          </div>

          <!-- Submit button -->
          <button type="submit" name="submit" class="btn btn-primary mb-4 text-center">Update</button>
        </form>

      </div>
    </div>
  </div>
</div>

@endsection
@push('scripts')
<script src="{{ asset('js/adminformvalidation.js') }}"></script>
@endpush
