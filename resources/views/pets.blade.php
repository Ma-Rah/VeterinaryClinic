@extends('master.master')

@section('content')

    pets
<ul></ul>
	@foreach ($pets as $pet)
	<li>{{$pet->name}}</li>
	@endforeach
</ul>
@endsection