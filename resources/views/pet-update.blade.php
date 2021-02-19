@extends('master.master')

@section('content')

    

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ action('PetUpdateController@store') }}" method='post'>
    @csrf
        <label for="body">Add pet to database</label>
        <br>
        <div name='body'>
            <input type="text" placeholder='Name' name='name'>
            <br>
            <input type="text" placeholder='Breed' name='breed'>
            <br>
            <input type="text" placeholder='Weight' name='weight'>
            <br>
            <input type="text" placeholder='Age' name='age'>
            <br>
            <input type="text" placeholder='owner_id' name='owner_id'>
            <br>

            <button action='submit'>Add Pet</button>
        </div>
    
    </form>

@endsection