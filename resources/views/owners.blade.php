@extends('master.master')

@section('content')

  <h1>Owners</h1>  
	<ul>
	@foreach ($owners as $owner)
	<li>Name: {{$owner->first_name}} {{$owner->surname}}</li>
	@endforeach
</ul>
@endsection