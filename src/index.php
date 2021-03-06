<!DOCTYPE html>
<html lang="en">
<!-- Community First Bank, N.A. index.php v2.0 by Nate Holcomb -->
<!-- Feb. 15th, 2020 --> 

<!--Description: index.php - Home - Community First Bank, N.A.-->
<head>
	<title> Home - Community First Bank, N.A. </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- BOOTSTRAP LINK, GOOGLE API LINK, JQUERY/JS LINK-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="style/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<!-- end linking. if you want to add more files, declarations go below -->
</head>

<!--MAKING THE MAIN CONTAINER-->
<div class="container-fluid no-pad">

	<!-- making the navbar -->
	<div class="header">
		<a href="index.php">
			<img id="logo" src="media/lnl.png" alt="Community 1st Bank">
		</a>
		<h3 id="padtext"><b>Community First Bank, N.A.</b></h3>
		<div class="topnav">
			<a href="safety.php">Financial Safety</a>
			<a href="loans.php">Loans and Lending</a>
			<a href="newsletter.php">Coffee Chats</a>
			<a href="about.php">About Us</a>
			<a href="index.php">Home</a>
		</div>
	</div>

	<!--begin main content -->
	<div class = "jumbotron text-center">
		<h1> Community First Bank, N.A.</h1>
		<br>
		<p> Where the grass stays greener. </p>
	</div>
	
	<div class = "container">
		<div class = "text-center">
			<br>
			<h1> What can we help you with today? </h1>
			<br>
		</div>
		<br>
		<div class = "row">
			<div class = "col-sm-6 text-center">
				<img src="media/moneysign250.png" title="Finance!" alt="dollar sign">
			</div>
			<div class = "col-sm-6 text-center">
				<img src="media/question250.png" title="Unsure?" alt="question mark">
			</div>
		</div>

		<div class="row">
			<div class="col-sm-6 text-center">
				<h3> Looking to finance a new project? </h3>
				<p> At Community First Bank, we understand that sometimes,
				small business doesn't mean a small change. We're committed
				to helping you achieve your dream by offering a wide variety
				of financial loan plans! Apply today!</p>
			</div>
			<div class="col-sm-6 text-center">
				<h3> Or maybe something else? </h3>
				<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
				Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
				Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
				Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p> Awesome, made in Bootstrap, and incredibly readable. </p>
			</div>
		</div>
		
		<div class = "text-center">
			<br>
			<h1> Not seeing what you're looking for? </h1>
			<br>
			<br>
		</div>		
		
		<div class = "row">
			<div class = "col-sm-4 text-center">
				<a href = "newsletter.php">
					<!-- JUST A PLACEHOLDER - gotta make my own! -->
					<img class = "fiximg250" src="media/smilemug.png" title="temp" alt="tempimg">
				</a>
			</div>
			<div class = "col-sm-4 text-center">
				<a href = "privacy.php">
					<img class = "fiximg250" src="media/lnl.png" title="temp" alt="tempimg">
				</a>
			</div>
			<div class = "col-sm-4 text-center">
				<a href = "sitemap.php"> <!--this was causing an error-->
					<img class = "fiximg250" src="media/lnl.png" title="temp" alt="tempimg">
				</a>
			</div>
		</div>
		
		
		<div class = "row">
			<div class="col-sm-4 text-center">
				<h3> Check out our coffee chats. </h3>
				<p> Our coffee chats are a great way to stay informed about everything going on at Community First. </p>
			</div>
			<div class="col-sm-4 text-center">
				<h3> View our Privacy Policy. </h3>
				<p> Privacy is important to you and we respect that. CFB has laid out exactly how we use your information here. </p>
			</div>
			<div class="col-sm-4 text-center">
				<h3> Visit our site map. </h3>
				<p> Take a look at all of our webpages so you can find what you need. </p>
			</div>
		</div>
		
		
	</div>
	
	
	
	<br>
	<br>
	<br>
	
	
	<footer class="footer">
		<div class = "container">
			<span class = "text-muted"> Copyright 2020 Community First Bank, N.A. All rights reserved.</span>
		</div>
	</footer>
	
</div>

</html>
