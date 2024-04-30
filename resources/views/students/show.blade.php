
@extends('students.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Client Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->name }}</h5>
        <p class="card-text">Address : {{ $students->address }}</p>
        <p class="card-text">orders : {{ $students->orders }}</p>
       
  </div>
    </hr>
  </div>
</div>