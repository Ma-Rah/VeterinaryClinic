@extends('master.master')

@section('content')

<h1>Owner: {{$owner->first_name}} {{$owner->surname}}</h1>

<h2>Pets:</h2>

<ul>
@foreach ($pets as $pet)
<li><a href="{{action('PetsController@show', $pet->id)}}">{{$pet->name}}</a></li>
@endforeach
</ul>

@endsection