@extends('layouts.admin')

@section('content')
<div class="row">
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title mb-5 d-inline">Create Admins</h5>
        <form method="POST" action="{{route('admins.store')}}" enctype="multipart/form-data" id="adminForm">
          @csrf
          <div class="form-outline mb-4 mt-4">
            <input type="email" name="email" id="email" class="form-control" placeholder="email" required />
          </div>

          <div class="form-outline mb-4">
            <input type="text" name="name" id="name" class="form-control" placeholder="name" required />
          </div>

          <div class="form-outline mb-4">
            <input type="password" name="password" id="password" class="form-control" placeholder="password" required minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,}" />
            <small id="passwordHelpBlock" class="form-text text-muted">
              Your password must be at least 8 characters long, contain at least one uppercase letter, one lowercase letter, one number, and one special character.
            </small>
          </div>

          <button type="submit" name="submit" class="btn btn-primary mb-4 text-center">create</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
@push('scripts')
<script src="{{ asset('js/validation.js') }}"></script>
@endpush
