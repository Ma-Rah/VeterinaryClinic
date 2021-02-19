@extends('master.master')

@section('content')

<ul>
@foreach ($owners as $owner) 
<li>
<a href="{{action('OwnersController@show', $owner->id)}}">
{{ $owner->first_name}} {{$owner->surname}} -  Owner ID: {{$owner->id}}</a></li>


@endforeach

</ul>
@endsection