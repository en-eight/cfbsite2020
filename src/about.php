<!DOCTYPE html>
<html lang="en">
<!-- Community First Bank, N.A. title.php v2.0 by Nate Holcomb -->
<!-- Feb. 15th, 2020 --> 

<!--Description: about.php - About Us - Community First Bank, N.A.-->
<head>
	<title> About Us - Community First Bank, N.A. </title>
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
		<h1> About Us </h1>
		<br>
		<p> From our roots to our leaves, all the way back to you. </p>
	</div>

	<!-- Here's the main content of the webpage. --> 
	<!-- It's two containers - think of one as the main envelope for the BOM...-->
	<!-- ...and one that has all of the information in it.-->
	<div class = "container">
		<div class = "text-center">

			<h1> We care about the community - it's in the name. </h1>
			<br>

			<p> Community First Bank, N.A. was founded in 1904 as the First National Bank of Forest, Ohio. 
			In 1981, we opened a branch opened in Kenton, Ohio. With over 75 years of experience at that point, who wouldn't want to branch out? </p>
			<p>That same year, we changed our name to what it is today. For what reason? Simple! Community First is a local bank for all our communities.  
			In 2002, we opened another office in the heart of downtown Upper Sandusky, Ohio. </p>

			<p> We are a locally owned, controlled, family oriented bank, dedicated to
			providing a safe, secure, competitive source of financial services to the residents of our community,
			small businesses, and family farms in our market area. It is further our mission to provide our
			shareholders with an adequate return on their investment in terms of both short-term yield and long-term
			growth while preserving a well-capitalized corporation. It is our mission to offer our employees quality
			employment where they are treated with respect and evaluated on their contributions to the goals and
			objectives of Community First Bank, N.A. </p>
		</div>
		
		<!-- Now we begin the rows and columns layout of the page.-->
		
		<br>		
		
		<!-- Weird display issue here. I want this to look better, maybe center it.-->
		<div class = "row center">
			<div class = "col-sm-8">
				<!-- Update - needs table layout. --> 
				<h3> Locations </h3>
				<p><b> Forest, Ohio</b></p>
				<p>118 E Lima St. Forest, OH 45843</p> 
				<p>419.273.2595</p>
				
				<br>
				
				<p><b>Kenton, Ohio</b></p> 
				<p>438 S Main St. Kenton, OH 43326</p>				
				<p>419.673.1084 </p>
				
				<br>
				
				<p><b>Upper Sandusky, Ohio</b></p>
				<p>101 N Sandusky Ave. Upper Sandusky, OH 43351</p>				
				<p>419.209.0308 </p>
			</div>
			<div class = "col-sm-4 text-center">
				<h3> Hours of Operation </h3>
				<p> Placeholder text - will update with table soon </p>
				<p><b> Online Banking and Bill Pay available 24/7. </b></p>
				<p><b> ATMS are open 24/7 at all branches. </b></p>
			</div>
		</div>
	</div>
	<br>
	
	
		
	
	<br>
	<br>
	<br>
	
	<footer class="footer">
		<div class = "container">
			<span class = "text-muted"> Copyright 2020 Community First Bank, N.A.</span>
		</div>
	</footer>

</div>

</html>
