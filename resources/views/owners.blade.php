@extends('master.master')

@section('content')

  <h1>Owners</h1>  

  <h3><a href="{{action('OwnerUpdateController@index')}}">Add a new owner</a></h3>
	<ul>
	@foreach ($owners as $owner)
	<li>Name:<a href="{{action('OwnersController@show', $owner->id)}}">
		{{$owner->first_name}} {{$owner->surname}}</a></li>
	@endforeach
</ul>
<div class="links">{{ $owners->links() }}</div>

@endsection