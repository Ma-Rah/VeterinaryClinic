@extends('master.master')

@section('content')

    pets
<ul></ul>
	@foreach ($pets as $pet)
	<li>{{$pet->name}}</li>
	@endforeach
</ul>
<div class="links">{{ $pets->links() }}</div>

@endsection