<!DOCTYPE html>
<html lang="en">
<!-- Community First Bank, N.A. index.php v2.0 by Nate Holcomb -->
<!-- Feb. 15th, 2020 --> 

<!--Description: index.php - Home - Community First Bank, N.A.-->
<head>
	<title> Home - Community First Bank, N.A.</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- BOOTSTRAP LINK, GOOGLE API LINK, JQUERY/JS LINK-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<!-- end linking. if you want to add more files, declarations go below -->
</head>

<!--MAKING THE MAIN CONTAINER-->
<div class="container-fluid">

	<!-- CREATING THE NAVBAR -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" href="#">Features</a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" href="#">Pricing</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Dropdown link
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>
	<!-- END NAVBAR CREATION -->
	
	
	
	
	
	<!--begin main content -->
	<div class = "jumbotron text-center">
		<h1> Community First Bank, N.A.</h1>
		<p> Where the grass stays greener. </p>
	</div>
	
	<div class = "container">
		<div class="row">
			<div class="col-sm-6 text-center">
				<h3> Looking to finance a new project? </h3>
				<p> Lorem ipsum sit amet, consectetur adipisicing elit...</p>
				<p> Awesome, made in Bootstrap, and incredibly readable. </p>
			</div>
			<div class="col-sm-6 text-center">
				<h3> Or maybe something else? </h3>
				<p> Lorem ipsum sit amet, consectetur adipisicing elit...</p>
				<p> Awesome, made in Bootstrap, and incredibly readable. </p>
			</div>
		</div>
	</div>
	
	
</div>

</html>
