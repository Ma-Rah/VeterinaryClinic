<nav class="top-menu">
<a {{ $current === 'home' ? 'class="current" ' : '' }} href="{{action( 'HomeController@index') }}">Home</a>

<a {{ $current === 'owners' ? 'class="current" ' : '' }} href="{{action( 'OwnersController@index') }}">Owners</a>

<a {{ $current === 'pets' ? 'class="current" ' : '' }} href="{{ action('PetsController@index') }}">Pets</a>


</nav>
