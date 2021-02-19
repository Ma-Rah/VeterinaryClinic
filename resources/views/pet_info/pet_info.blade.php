@extends('master.master')

@section('content')

<h1>Name: {{$pet->name}}</h1>
<h2>Breed: {{$pet->breed}}</h2>
<h2>Weight: {{$pet->weight}} lbs.</h2>
<h2>Age: {{$pet->age}} years</h2>
<img src="{{asset('images/'.$pet->photo)}}" alt="" class="pet-photo">

<h2>Owner: <a href="{{action('OwnersController@show', $pet->owner_id)}}">{{$owner[0]->first_name}} {{$owner[0]->surname}}</a></h2>

@endsection