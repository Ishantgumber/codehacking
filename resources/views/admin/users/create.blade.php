@extends('layouts.admin')

@section('content')

<h1> Create Post </h1>
<form method="post" action='/create/post' enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="form-group">
    <label>Title:</label>
    <input type="text" name='title' class="form-control" placeholder='Enter title' required>

    <br>
    <label>Email:</label>
    <input type="email" name='email' class="form-control" placeholder='Enter email' required>
    <br>
    <!-- <label>Post:</label>
    <textarea name='post' class="form-control"> </textarea>
    <br> -->
    <label>Role:</label>
    <select name='role_id' class="form-control" required>Choose your option
      <option value='' selected disabled>Choose role</option>
      @foreach($roles as $role)
      <option value='{{$role->id}}'>{{$role->name}}</option>
      @endforeach
      <select>
        <br>
        <label> Status:</label>
        <select name='status' class="form-control" required>
          <br>
          <option value='1'> Active </option>
          <option value='2' selected>Inactive </option>
        </select>
        <br>
        <label>Password:</label>
        <input type='password' class="form-control" name='password' placeholder='Enter password' required>
        <br>
        <label>Upload your photo:</label>
        <input type='file' class="form-control" name='file' placeholder='Enter password' >
        <br>
  </div>

  <input type="submit" class="btn btn-primary">
</form>

@stop