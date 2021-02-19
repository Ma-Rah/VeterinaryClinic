<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veterinary Clinic</title>
	

</head>
<body>

<div class="parent">
	<div class="top-menu">
		@include('common.top_menu', [
		'current' => $current_menu_item ?? null
		])

			<form action="{{ action('OwnersController@search') }} ">
				<input type="text" placeholder='search for a dog or a owner' name='search'>
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
	height: 100%;
	margin:0;
	font-size: 1.2rem;
}

.content {
padding:  2rem;
line-height: 1.8rem;

}

.parent {

display:flex;
flex-flow: column nowrap;
justify-content: space-between;


grid-template-columns: 1fr;
grid-template-rows: 100px 1fr ;
grid-column-gap: 0px;
grid-row-gap: 0px;
}

a {
	color: tomato;
}

li {
	padding: 0 0.5rem;
}

/* .top-menu { grid-area: 2 / 1 / 3 / 2; }
.content { grid-area: 3 / 1 / 4 / 2; }
.links { grid-area: 1 / 1 / 2 / 2; } */

.top-menu {
	background: tomato;
	display:flex;
	justify-content: center;
	align-items: center;
}

.top-menu a {
	text-decoration: none;
	font-size: 2rem;
	margin: 1.5rem 1rem;
	font-weight: bold;
	color: white;
}

.links {
	width: 100%;

	
	display: flex;
	justify-content: center;
	flex-flow: column nowrap;
	align-items:center;
	text-align: center;
	justify-self: flex-end;
	
}


.links svg{
	height: 50px;
	width: 50px;
}

.pet-photo {
	height: 300px;
	width: 300px;
	border-radius: 5px;
	object-fit:cover;
	
}
</style>
</body>
</html>