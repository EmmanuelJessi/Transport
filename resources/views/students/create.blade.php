
@extends('students.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Client</div>
  <div class="card-body">
       
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>Orders</label></br>
        <input type="text" name="orders" id="orders" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
        
    </form>
    
  </div>
</div>
  
@stop