@extends('layout')
@section('content')
<h2>List Page</h2>
<section>
    @if(Session::get('status'))
    {{Session::get('status')}}
    @endif
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  @foreach ($data as $item)
  <tbody>
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->address}}</td>    
    </tr>
  </tbody>
  @endforeach
</table>
</section>
@stop