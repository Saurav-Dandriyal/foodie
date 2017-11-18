<?php 
	session_start();
?>
<!DOCTYPE html>

<html lang="en" ng-app="foodieApp">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Foodie</title>
    <script type="text/javascript" src="js/angular.js"></script>
    <script type="text/javascript" src="js/angular-route.js"></script>
	<script type="text/javascript" src='https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js'></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
  </head>

  <body id="app">
	<div class="navbar navbar-inverse navbar-fixed-top"> 
		<div class="container"> 
			<div class="navbar-header"> 
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> 
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span> 
				</button> 
				<a class="navbar-brand" href="index.php">Foodie</a> 
			</div>
			<div class="collapse navbar-collapse" id="myNavbar"> 
				<ul class="nav navbar-nav navbar-right"> 
					<?php if (!isset($_SESSION['email'])) { ?> 
							<li><a href="pages/signup"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
							<li><a href="#!/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					<?php } else { ?> 
							<li><a href = "cart.html"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li> 	
							<li><a href = "settings.html"><span class = "glyphicon glyphicon-user"></span> Settings</a></li> 
							<li><a href = "logout.html"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li> 
					<?php } ?> 
				</ul> 
			</div> 
		</div> 
	</div>
    <div ng-view></div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="main.js"></script>
  </body>
</html>
