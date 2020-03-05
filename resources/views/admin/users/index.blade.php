@extends('layouts.admin')

@section('content')

<h1> Users </h1>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">Role</th>
      <th scope="col">Status</th>
      <th scope="col">updated at</th>
      <th scope="col">created at</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @if($users)
        @foreach($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->id}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td><span href="#" class="badge badge-dark">{{$user->role->name}}</span></td>
      @if($user->is_active == 1)
      <td><p href="#" class="badge badge-warning">Active</p></td>
      @else
      <td><p href="#" class="badge badge-danger">Inactive</p> </td>
      @endif
      <td>{{$user->updated_at->diffForHumans()}}</td>
      <td>{{$user->created_at->diffForHumans()}}</td>
      <td><i class="fa fa-trash" aria-hidden="true"></i>  &nbsp; <i class="fa fa-pencil" aria-hidden="true"></i>
 </td>

    </tr>
    @endforeach

    @endif
        

  </tbody>
</table>



@stop