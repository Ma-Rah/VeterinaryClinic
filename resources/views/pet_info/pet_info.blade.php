@extends('master.master')

@section('content')

<h1>Name: {{$pet->name}}</h1>
<h2>Breed: {{$pet->breed}}</h2>
<h2>Weight: {{$pet->weight}}</h2>
<h2>Age: {{$pet->age}}</h2>


@endsection