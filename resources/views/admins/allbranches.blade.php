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
    @if(session()->has('update'))
    <div class="alert alert-success">
        {{ session()->get('update') }}
    </div>
    @endif
    @if(session('deleted'))
    <div class="alert alert-success">
        {{ session('deleted') }}
    </div>
@endif
        <h5 class="card-title mb-4 d-inline">Current Branches</h5>
        
   <a  href="{{route ('branches.create')}}" class="btn btn-primary mb-4 text-center float-right">Create New Branch</a> 
        <table class="table">
          <thead>
            <tr>
              <!--<th scope="col">#</th>-->
              <th scope="col">name</th>
              <th scope="col">location</th>
              <th scope="col">description</th>
              <th scope="col">update</th>
              <th scope="col">delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach ( $branches as $branch )
            <tr>
            <!--  <th scope="row">{{$branch->id}}</th>-->
              <td style="color: rgb(75, 75, 137)"><span>{{$branch->name}}</span></td>
              <td style="color: rgb(22, 94, 15)"><span>{{$branch->location}}</span></td>
              <td>{{$branch->description}}</td>

              <td><a href="{{ route('branches.edit', $branch->id) }}" class="btn btn-warning text-white text-center">Update</a>
              </td>
              <td><a href="{{ route('branches.delete', $branch->id) }}" class="btn btn-danger  text-center " onclick="return confirm
              ('Are you sure you want to delete this branch? the services under the branch will also be deleted')">Delete</a></td>
            </tr>
            @endforeach
          </tbody>
        </table> 
      </div>
    </div>
  </div>
</div>
@endsection