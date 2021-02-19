@extends('master.master')

@section('content')

<ul>
@foreach ($pets as $pet) 
<li>
<a href="{{action('PetsController@show', $pet->id)}}">
{{ $pet->name }}, Owner ID: {{$pet->owner_id}}</a></li>
@endforeach

</ul>
@endsection