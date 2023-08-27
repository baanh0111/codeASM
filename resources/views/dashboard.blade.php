
@extends('layouts.app')
  
@section('title', 'Welcome to Admin Management Page - Watch Shop')
  
@section('contents')
  <div class="row" style="font-size:50px">
    HELLO {{ auth()->user()->name }}
  </div>
@endsection