@extends('master.master')

@section('content')

<ul>
@foreach ($pets as $pet) 
<li>{{ $pet->name }}, Owner ID: {{$pet->owner_id}}</li>
@endforeach

</ul>
@endsection