<!DOCTYPE html>
<html ng-app="usuarios">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width:device-width, initial-scale=1">
	
	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/manager.css">
	<link rel="stylesheet" href="css/manager-mobile.css">

	<script src="lib/angularjs/angular.min.js"></script>

</head>
<body>

	<header>

		<div id="menu-mobile-mask" class="visible-xs"></div>

		<div id="menu-mobile" class="visible-xs">

			<ul class="list-unstyled">
				<li><a href="home">Home</a></li>
				<li><a href="emails">Emails</a></li>
				<li><a href="samantha">Samantha</a></li>
				<li><a href="sul">Hemisfério Sul</a></li>
			</ul>

			<div class="bar-close">
				<button type="button" class="btn btn-close"><i class="fa fa-close"></i></button>
			</div>

		</div>

		

		<div class="container">
			<button id="btn-bars" type="button"><i class="fa fa-bars"></i></button>
		</div>

		

		<div class="container">

			<div class="row">

				<nav id="menu" class="span12 pagination-centered">
					<ul>
						<li><a href="home">Home</a></li>
						<li><a href="emails">Emails</a></li>
						<li><a href="samantha">Samantha</a></li>
						<li><a href="sul">Hemisfério Sul</a></li>
					</ul>
				</nav>

			</div>

		</div>			

	</header>
