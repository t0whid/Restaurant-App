@extends('layout')
@section('content')
<h2>Add</h2>
<section class="col-sm-6">
<form method="post" action="">
    @csrf
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" id="name" name="name"  placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" id="email" name="email"  placeholder="Enter Email">
  </div>
  <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" id="address" name="address"  placeholder="Enter address">
  </div>
  
  <!-- <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</section>
@stop