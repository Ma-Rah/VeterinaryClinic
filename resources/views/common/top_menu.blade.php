<nav class="top-menu">

<a {{ $current === 'owners' ? 'class="current" ' : '' }} href="{{action( 'OwnersController@index') }}">Owners</a>

<a {{ $current === 'pets' ? 'class="current" ' : '' }} href="{{ action('PetsController@index') }}">Pets</a>


</nav>
