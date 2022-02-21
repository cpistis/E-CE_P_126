<?php
	session_start();
require_once "config.php";
function debug_to_console($data) {

    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}
$results = array();
if( isset($_POST['search'])){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $provider = $_POST["provider"];
    $city = $_POST["city"];
    $specialty = $_POST["specialty"];

    $sql= "SELECT * FROM Providers WHERE Firstname LIKE '%{$fname}%' AND Lastname LIKE '{$lname}%' AND Provider LIKE '%{$provider}%'AND City LIKE '%{$city}%'AND Specialty LIKE '%{$specialty}%'";
    $result = $db->query($sql);

if ($result->num_rows> 0){
	//OUTPUT DATA OF EACH ROW
	while($row = $result->fetch_assoc()){
	    array_push($results,$row);
		
	}
	$_SESSION["search_results"] = $results;
	header('Location: result.php');
    exit();
 }else{		
		echo "0 results";
 }
} 
$db->close();

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Αναζήτηση Ιατρού - Healthcare Express</title>
		<link rel="icon" href="https://toppng.com/uploads/preview/medical-logo-png-medical-symbol-blue-11562978013og9cpflhen.png" />
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

		.search{
	      background-color: blue;
	      color: white;
	      padding: 14px 20px;
	      margin-left: 575px;
	      border: none;
	      cursor: pointer;
	      width: 200px;
	      border-radius: 25px;
	      font-family: Helvetica;
	      font-size: 17px;
	    }
		.mySlides {
			display: none;
			background-color: lightskyblue;
			height: 400px;
		}
		/*img {
			vertical-align: middle;
			width: 50px;
			height: 100px;
		}*/		

		/* Slideshow container */
		.slideshow-container {
		  max-width: 1000px;
		  position: relative;
		  margin: auto;
		}

		/* Next & previous buttons */
		.prev, .next {
		  cursor: pointer;
		  position: absolute;
		  top: 50%;
		  width: auto;
		  padding: 16px;
		  margin-top: -22px;
		  color: white;
		  font-weight: bold;
		  font-size: 18px;
		  transition: 0.6s ease;
		  border-radius: 0 3px 3px 0;
		  user-select: none;
		}

		/* Position the "next button" to the right */
		.next {
		  right: 0;
		  border-radius: 3px 0 0 3px;
		}

		/* On hover, add a black background color with a little bit see-through */
		.prev:hover, .next:hover {
		  background-color: rgba(0,0,0,0.8);
		}

		/* Caption text */
		/*.text {
		  color: #f2f2f2;
		  font-size: 40px;
		  font-family: Papyrus;
		  padding: 8px 12px;
		  position: absolute;
		  bottom: 330px;
		  width: 100%;
		  text-align: center;
		}*/

		.text2{
			color: #f2f2f2;
			font-size: 70px;
			font-family: Papyrus;
			padding: 8px 12px;
			position: absolute;
			top: 150px;
			width: 100%;
			text-align: center;
		}

		.navigate{
			text-decoration: none;
			color: #f2f2f2;
		}

		.new1{
			border-top: 1px solid silver;
			width: 70%;
			text-align: center;
		}

		/* Number text (1/3 etc) */
		.numbertext {
		  color: #f2f2f2;
		  font-size: 12px;
		  padding: 8px 12px;
		  position: absolute;
		  top: 0;
		}

		/* The dots/bullets/indicators */
		.dot {
		  cursor: pointer;
		  height: 15px;
		  width: 15px;
		  margin: 0 2px;
		  background-color: #bbb;
		  border-radius: 50%;
		  display: inline-block;
		  transition: background-color 0.6s ease;
		}

		.active, .dot:hover {
		  background-color: #717171;
		}

		/* Fading animation */
		.fade {
		  -webkit-animation-name: fade;
		  -webkit-animation-duration: 1.5s;
		  animation-name: fade;
		  animation-duration: 1.5s;
		}

		@-webkit-keyframes fade {
		  from {opacity: .4} 
		  to {opacity: 1}
		}

		@keyframes fade {
		  from {opacity: .4} 
		  to {opacity: 1}
		}

		/* On smaller screens, decrease text size */
		@media only screen and (max-width: 300px) {
		  .prev, .next,.text {font-size: 11px}
		}
		.footer-nav{
			text-align: center;
			color: black;
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

		/* SEARCH FORM STYLE */
		.div1{
			width: 50%;
			margin-left: auto;
			margin-right: auto;
			font-family: Helvetica;
			color: blue;
			border: solid white 1px;
			border-radius: 25px;
			background-color: lightskyblue;
		}
		.form{
			margin-left: 50px;
			font-size: 20px;
			background-color: lightskyblue;
		}
		input{
			border-radius: 25px;
			width: 200px;
			height: 30px;
			display: inline-block;
		}
		select{
			border-radius: 25px;
			width: 200px;
			height: 30px;
			text-align: center;
			font-size: 17px;
			display: inline-block;
		}
		.formbtn{
			background-color: blue;
			text-decoration: none;
			color: white;
			padding: 10px 18px;
			border-radius: 25px;
			border: none;
			cursor: pointer;
		}
		.example{
			margin-left: 90px;
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
		  <a href="./contactus.php" style="cursor: default">Users</a>
		  <ul style="list-style-type:square">
		  	<a  href="./login.php" style="color: #f1f1f1; font-size:18px">Log In</a>
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

		<br><br><br><br><br>

		<div class="div1">
	    	<h1 style="font-family:Helvetica; margin-left: 50px">Search for a Doctor</h1>
	    	<hr style="margin-left: 50px; margin-right: 50px; color:white"><br>
	    	<div class="form">
		    	<form method="POST">
		    		<label for="fname"><b>First name</b></label>
		  			<input type="text" id="fname" name="fname"><br><br>
		 		    <label for="lname"><b>Last name</b></label>
		 		    <input type="text" id="lname" name="lname"><br><br>
		 		    <label for="provider"><b>Provider</b></label>
				    <input  class="pbox" type="text" id="provider" name="provider">
		    	
		    	<div class="example">
		    		<p style="font-family: Helveica; font-size:10px"><b>Hospital,Clinic,etc</b></p>
		    	</div>
		    	<label for="city"><b>Select city</b></label>
		    	<select name="city">
			      <option value="">SELECT</option>
			      <option value="Nicosia">Nicosia</option>
			      <option value="Limassol">Limassol</option>
			      <option value="Larnaka">Larnaka</option>
			      <option value="Famagusta">Famagusta</option>
			      <option value="Paphos">Paphos</option>
			    </select>
			    <br><br>
			    <label for="specialty"><b>Specialty</b></label>
			    <select name="specialty" class="specialty">		      
			      <option value="">SELECT</option>
			      <option value="Pathology">Pathology</option>
			      <option value="Pediatrics">Pediatrics</option>
			      <option value="Gynaecology">Gynaecology</option>
			      <option value="Cardiology">Cardiology</option>
			      <option value="Neurology">Neurology</option>
	                <option value="Coder">Coder</option>
			    </select>	    	
		    	<br><br>
					<div class="butt">
						<button class="formbtn" name="search" type="search" value="search">Search</button>
						<a href="./drsearch.php"><button class="formbtn" style="background-color: lightgrey; color: black">Clear</button></a>
						
					</div> 
				</form>
			</div>
			<br><br>
		</div>


		

		<br><br><br><br><br><br>
		<hr class="new1">
		<nav class="footer-nav" role="navigation">
			<p style="font-size: 17px">Copyright &copy; 2021 Healthcare Express. All rights reserved.</p>
		</nav>
	</body>
</html>

