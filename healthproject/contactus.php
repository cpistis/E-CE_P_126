<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Επικοινωνία - Healthcare Express</title>
		<link rel="icon" href="https://toppng.com/uploads/preview/medical-logo-png-medical-symbol-blue-11562978013og9cpflhen.png" />
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
		
		<!--<link rel="stylesheet" href="./css/style.css"> -->
	</head>

	<style>
		* {
			box-sizing: border-box;
		}
		body {
			font-family: Calibri, sans-serif; margin:0;
			background: url(health.jpg);
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
		}
		.mySlides {
			display: none;
		}

		icons i{
			color: #fff;
			padding: 8px 0px;
			text-align: center;
			height: 30px;
			width: 30px;
			margin-right: 5px;
		}

		img {
			vertical-align: middle;
		}	

		.purpose{
			margin-left: auto;
			margin-right: auto;
			background-color: lightblue;
			width: 90%;
		}

		h3{
			margin-left: 30px;
			font-family: Helvetica;
			text-decoration: underline;
		}	

		.descr{
			margin-left: 30px;
			font-family: Helvetica;
		}

		
		.footer-nav{
			text-align: center;
			color: black;
		}

		.new1{
			color: silver;
			width: 70%;
			text-align: center;
		}

		.profile{
			display: block;
			margin-left: auto;
			margin-right: auto;
			width: 150px;
			height: 150px;
		}

		.pic{
			/*margin-top: 100px;*/
		}

		.name{
			float: left;
			display: block;
			color: white;
			text-align: center;
			padding: 20px 20px;
			text-decoration: none; 
			font-family: Calibri;
			font-size: 20px; 
		}

		.sidebar {
		  height: 100%;
		  width: 0;
		  position: fixed;
		  z-index: 1;
		  top: 0;
		  left: 0;
		  background-color: #111;
		  overflow-x: hidden;
		  transition: 0.5s;
		  padding-top: 60px;
		}

		.sidebar a {
		  padding: 8px 8px 8px 32px;
		  text-decoration: none;
		  font-size: 25px;
		  color: #818181;
		  display: block;
		  transition: 0.3s;
		}

		.sidebar a:hover {
		  color: #f1f1f1;
		}

		.sidebar .closebtn {
		  position: absolute;
		  top: 0;
		  right: 25px;
		  font-size: 36px;
		  margin-left: 50px;
		}

		.openbtn {
		  font-size: 20px;
		  cursor: pointer;
		  background-color: black;
		  color: white;
		  padding: 10px 15px;
		  border: none;
		}

		.openbtn:hover {
		  background-color: #444;
		}

		#main {
		  transition: margin-left .5s;
		  padding: 16px;
		}

		/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
		@media screen and (max-height: 450px) {
		  .sidebar {padding-top: 15px;}
		  .sidebar a {font-size: 18px;}
		}
	</style>

	<body>
		
		<div id="mySidebar" class="sidebar">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
		  <a href="./home2.php" style="cursor: pointer">Αρχική</a>
		  <a href="#" style="cursor: default">About Us</a>
		  <ul style="list-style-type:none">
		  	<a href="./whoweare.php" style="color: #f1f1f1; font-size: 18px" >Ποιοί είμαστε</a>
		  	<a  href="./purpose.php" style="color: #f1f1f1; font-size:18px">Σκοπός</a>
		  </ul>
		  <a href="#" style="cursor: default">Υπηρεσίες</a>
		  <ul style="list-style-type:square">
		  	<a  href="./hospitals.php" style="color: #f1f1f1; font-size:18px">Νοσοκομεία</a>
		  	<a  href="./alldoctors.php" style="color: #f1f1f1; font-size:18px">Ιατροί</a>
		  	<a  href="./pharma.php" style="color: #f1f1f1; font-size:18px">Φαρμακεία</a>
		  </ul>
		  <a href="#">Ανακοινώσεις σελίδας</a>
		  <a href="#">Επικοινωνία</a>
		  <a href="#" style="cursor: default">Users</a>
		  <ul style="list-style-type:square">
		  	<a  href="./login.php" style="color: #f1f1f1; font-size:18px">Log In</a>
		  	<!-- <a  href="./dr_login.php" style="color: #f1f1f1; font-size:18px">Doctor Log In</a> -->
		  	<a  href="./signup.php" style="color: #f1f1f1; font-size:18px">Sign Up</a>
		  </ul>
		</div>	

		<div id="main">
		  <button class="openbtn" onclick="openNav()">☰ Menu</button>  
		</div>

		<div class="pic">
			<img class="profile" src="logo.png">
		</div>

		<script>
		function openNav() {
		  document.getElementById("mySidebar").style.width = "250px";
		  document.getElementById("main").style.marginLeft = "250px";
		}

		function closeNav() {
		  document.getElementById("mySidebar").style.width = "0";
		  document.getElementById("main").style.marginLeft= "0";
		}
		</script>

		<br><br>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-12">
					<div class="row">
						<div class="col-lg-12 col-12 p-0 contact-us">
							<h4 class="">CONTACT US</h4><hr>
						</div>
					</div>
					<div class="row bg-light pt-3 pb-3 mb-4">
						<div class="col-lg-12">
							<h6>ADDRESS :</h6>
						</div>
						<div class="col-lg-4 col-4">
							Sekeri,
							Volos, 38334,
							Magnesia,
							Greece
						</div>
						<div class="col-lg-4 col-4">
							<p class="m-0 text-danger"><i class="fa fa-phone-square" aria-hidden="true"></i>+30 2421011111</p>
							<p class="m-0 text-info"><i class="fa fa-envelope" aria-hidden="true"></i>info@healthcareex.gr</p>
						</div>
						<!--<div class="col-lg-4 col-4 address-icon text-center text-danger">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div> -->
					</div>
					<br>					
				</div>
			</div>
		</div>

		<br><br><br><br><br><br>
		<hr class="new1">
		<nav class="footer-nav" role="navigation">
			<p style="font-size: 17px; font-family: Helvetica">Copyright &copy; 2021 Healthcare Express. All rights reserved.</p>
		</nav>
	</body>
</html>