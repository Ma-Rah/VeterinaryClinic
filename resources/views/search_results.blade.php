@extends('master.master')

@section('content')

<ul>
@foreach ($owners as $owner) 
<li>{{ $owner->first_name }} {{$owner->surname}} ID: {{$owner->id}}</li>
@endforeach

</ul>
@endsection