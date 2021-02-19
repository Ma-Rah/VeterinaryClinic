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
	</div>

		<div class="content">
			@yield('content')
		</div>

	</div>

	<style>
	.parent {
    display: grid;
    grid-template-columns: 1fr;
    grid-template-rows: 50px 1fr;
    grid-column-gap: 0px;
    grid-row-gap: 0px;
}

.top-menu {
	background: darkgrey;
}

.top-menu a {
	text-decoration: none;
	font-size: 2rem;
	padding: 1rem;
}

.links svg{
	height: 50px;
	width: 50px;

}
</style>
</body>
</html>