@extends('master.master')

@section('content')

<h1>Owner: {{$owner->first_name}} {{$owner->surname}}</h1>

<h2>Pets:</h2>

<ul>
@foreach ($pets as $pet)
<li><a href="{{action('PetsController@show', $pet->id)}}">{{$pet->name}}</a></li>
@endforeach
</ul>
<h2>Owner ID: {{$pet->owner_id}}</h2>

<h3><a href="{{action('PetUpdateController@index')}}">Add a pet</a></h3>
@endsection