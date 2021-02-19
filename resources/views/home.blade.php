@extends('master.master')

@section('content')

   <h1>Welcome to our pet database</h1>
   <h2><a href="{{action('OwnersController@index')}}">Go to list of owners</a></h2>

   <h2><a href="{{action('PetsController@index')}}">Go to list of pets</a></h2>

@endsection