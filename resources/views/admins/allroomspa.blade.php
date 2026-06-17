@extends('layouts.admin')

@section ('content')


<div class="row">
  <div class="col">
    <div class="card">
      <div class="card-body">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if(session('deleted'))
    <div class="alert alert-success">
        {{ session('deleted') }}
    </div>
@endif
        <h5 class="card-title mb-4 d-inline">Roomspa Services</h5>
       <a  href="{{route ('roomspa.create')}}" class="btn btn-primary mb-4 text-center float-right">Create New Spa Services</a>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Image</th>
              <th scope="col">Spa Service</th>
              <th scope="col">Price</th>
              <th scope="col">Num of Persons</th>
              <th scope="col">View</th>
              <th scope="col">Num of Beds</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>

            @foreach ( $roomspa as $spa)

            <tr>
              <th scope="row">{{$spa->id}}</th>
              <td style="color: rgb(79, 98, 40)"><span>{{$spa->name}}</span></td>
              <td><img height="60" width='60' src="{{asset('assets/images/'.$spa->image.'')}}"></td>
              <td>{{$spa->spaservice}}</td>
              <td>{{$spa->currency_code}} {{$spa->price}} </td>
              <td>{{$spa->maxpeeps}}</td>
              <td>{{$spa->view}}</td>
              <td>{{$spa->bed}}</td>
              <td><a href="{{route ('roomspa.delete', $spa->id)}}" class="btn btn-danger  text-center" onclick="return confirm('Are you sure you want to delete this service?')">Delete</a></td>
            </tr>

            @endforeach
          </tbody>
        </table> 
      </div>
    </div>
    @endsection