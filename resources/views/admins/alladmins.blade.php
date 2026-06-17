@extends('layouts.admin')

@section('content')

<div class="row">
  <div class="col">
    <div class="card">
      <div class="card-body">
        @if(session('success'))
          <div class="alert alert-success">
              {{ session('success') }}
          </div>
        @endif
        @if(session('update'))
          <div class="alert alert-success">
              {{ session('update') }}
          </div>
        @endif
        @if(session('deleted'))
          <div class="alert alert-success">
              {{ session('deleted') }}
          </div>
        @endif
        <h5 class="card-title mb-4 d-inline">Admins</h5>
        <a href="{{ route('admins.create') }}" class="btn btn-primary mb-4 text-center float-right">Create Admins</a>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Update</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($admins as $admin)
              <tr>
                <th scope="row">{{ $admin->id }}</th>
                <td>{{ $admin->name }}</td>
                <td>{{ $admin->email }}</td>
                <td>
                  <a href="{{ route('admins.edit', $admin->id) }}" class="btn btn-warning text-white text-center">Update</a>
                </td>
                <td>
                  <a href="{{ route('admins.delete', $admin->id) }}" class="btn btn-danger text-center" onclick="return confirm('Are you sure you want to delete this admin?')">Delete</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection
