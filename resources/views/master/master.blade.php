<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veterinary Clinic</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
	

</head>
<body>

<div class="parent">
	<div class="top-menu">
		@include('common.top_menu', [
		'current' => $current_menu_item ?? null
		])

			<form action="{{ action('OwnersController@search') }} ">
				<input type="text" placeholder='search for an owner' name='search'>
				<button action='submit'>Search</button>
			</form>

			<br>
			<form action="{{ action('PetsController@search') }} ">
				<input type="text" placeholder='search for a pet' name='search'>
				<button action='submit'>Search</button>
			</form>

			

	</div>



		<div class="content">
			@yield('content')
		</div>

		<div class="links"> </div>
</div>

	<style>


* {
	box-sizing: border-box;
}



a {
	text-decoration: none;
	color: black;

}

html, body {
	font-family: 'Poppins', sans-serif;
	height: 100%;
	margin:0;
	
}

.content {
padding: 2rem;
display:flex;
flex-flow: column nowrap;
align-items: center;
justify-content:flex-start;
height: 90vh;

}

h1 {
	margin: 0;
}

.parent {

display:flex;
flex-flow: column nowrap;
justify-content: center;
grid-template-columns: 1fr;
grid-template-rows: 1fr 1fr ;
grid-column-gap: 0px;
grid-row-gap: 0px;
}

a {
	color: tomato;
}


li {
	padding: 0 0.5rem;
	list-style-type:square;
}

/* .top-menu { grid-area: 2 / 1 / 3 / 2; }
.content { grid-area: 3 / 1 / 4 / 2; }
.links { grid-area: 1 / 1 / 2 / 2; } */

.top-menu {
	background: tomato;
	display:flex;
	justify-content: center;
	align-items: center;
	padding: 0 1rem;
}

input {
	margin: 0 0.1rem;
	
	height: 20px;
}

button {
	margin-right: 2rem;
	border: 1px solid black;
	background: white;

	
}

.top-menu a {
	text-decoration: none;
	font-size: 2rem;
	margin:  1rem;
	font-weight: bold;
	color: white;
}

.top-menu a:active {
	color: black;
}

.links {

	display: flex;
	justify-content: center;
	flex-flow: column nowrap;
	align-items:center;
	text-align: center;

	
}



.links svg{
	height: 50px;
	width: 50px;
}

.pet-photo {
	height: 400px;
	width: 400px;
	border-radius: 5px;
	object-fit:cover;
	
}

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {...}

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {...}

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
	body {
		font-size: 1.2rem;
	}



	ul {
		
		display: grid;
		grid-auto-columns: max-content;
	
	}
}

</style>
</body>
</html>