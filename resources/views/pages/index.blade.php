@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
  <h1> {{$title}}</h1>
  <p>This is the Laravel application from the "Laravel from scratch" series</p>
  <p> <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn-success btn btn-lg" href="/register" role="button"> Register </a> </p>
</div>
@endsection
