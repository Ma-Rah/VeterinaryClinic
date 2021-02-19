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

    <form action="{{ action('OwnerUpdateController@store') }}" method='post'>
    @csrf
        <label for="body">Add owner to database</label>
        <br>
        <div name='body'>
            <input type="text" placeholder='first name' name='first_name'>
            <br>
            <input type="text" placeholder='surname' name='surname'>
            <br>

            <button action='submit'>Add Owner</button>
            
        </div>
    </form>

@endsection