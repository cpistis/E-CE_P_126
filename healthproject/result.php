<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Ιατροί - Healthcare Express</title>
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

		table {
			margin-left: 50px; 
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width: 75%;
			background-color: white;
			margin: auto;
		}

		td, th {
		  border: 1px solid black; /*#dddddd*/
		  text-align: left;
		  padding: 8px;
		  margin-left: 50px;
		}

		tr:nth-child(even) {
		  background-color: #dddddd;
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
		.book{
	      background-color: blue; /*#04AA6D*/
	      color: white;
	      padding: 14px 20px;
	      margin: 8px 0;
	      margin-left: 170px;
	      border: none;
	      cursor: pointer;
	      width: auto;
	      border-radius: 25px;
	    }

	    .cancelbtn {
	      width: auto;
	      border-radius: 25px;
	      padding: 14px 20px;
	      margin-left: 5px;
	      border: none;
	      cursor: pointer;
	      background-color: lightgrey; /* #f44336*/
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

		 <table align="center">
            <tr class="first_row">
				<th>Code</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Provider</th>
                <th>City</th>
                <th>Specialty</th>
                <th>Address</th>
                <th>Telephone</th>
                <th>Email</th>
            </tr>

                <?php
                $results = $_SESSION["search_results"];
                $counter = 0;
                foreach($results as $person){
                    echo "<tr class='".$counter."_row'>".
					"<td>".$person["Code"]."</td>".
                    "<td>".$person["Firstname"]."</td>".
		    		"<td>".$person["Lastname"]."</td>".
		    		"<td>".$person["Provider"]."</td>".
		    		"<td>".$person["City"]."</td>".
					"<td>".$person["Specialty"]."</td>".
					"<td>".$person["Address"]."</td>".
					"<td>".$person["Telephone"]."</td>".
					"<td>".$person["Email"]."</td>".
	                "</tr>";
		    		#"<th>Address</th><td>'".$person["address"]."'</td>".
		    		#"<th>Telephone</th><td>'".$person["telephone"]."'</td>".
		    		#"<th>Email</th><td>'".$person["email"]."'</td>";
                    $counter++;
                }

                ?>
		    </table>
		    
		<button class="book"><a href="./calendar2.php" style="color:white;text-decoration: none">Book an Appointment</a></button>
		<button class="cancelbtn"><a href="./drsearch.php" style="color:white;text-decoration: none; color:black;">Back</a></button>

				

		<br><br><br><br><br><br>
		<hr class="new1">
		<nav class="footer-nav" role="navigation">
			<p style="font-size: 17px">Copyright &copy; 2021 Healthcare Express. All rights reserved.</p>
		</nav>
	</body>
</html>


<!--<div class="kumpi">
		<i class="fa fa-info-circle"></i>
		<i class="fa fa-info-circle" style="font-size:24px"></i>
		<i class="fa fa-info-circle" style="font-size:36px"></i>
		<i class="fa fa-info-circle" style="font-size:48px;color:red"></i>
		<br>

		</div> -->