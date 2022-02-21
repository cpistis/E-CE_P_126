<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Ποιοί Είμαστε - Healthcare Express</title>
		<link rel="icon" href="https://toppng.com/uploads/preview/medical-logo-png-medical-symbol-blue-11562978013og9cpflhen.png" />
		<!--<link rel="stylesheet" href="./css/style.css"> -->
	</head>

	<style>
		* {
			box-sizing: border-box;
		}
		body {
			font-family: Helvetica, sans-serif; margin:0;
			background: url(health.jpg);
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
		}
		.mySlides {
			display: none;
		}
		img {
			vertical-align: middle;
		}	

		.whoweare{
			margin-left: auto;
			margin-right: auto;
			background-color: lightskyblue;
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
			width: 70%;
			position: center;
			color: silver;
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
			font-family: Helvetica;
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
		  <a href="./contacts.php">Επικοινωνία</a>
		  <a href="#" style="cursor: default">Users</a>
		  <ul style="list-style-type:square">
		  	<a  href="./login.php" style="color: #f1f1f1; font-size:18px">Log In</a>
		  	<a  href="./dr_login.php" style="color: #f1f1f1; font-size:18px">Doctor Log In</a>
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

		<div class="whoweare">
			<br>
			<h3>Ποιοί είμαστε</h3>
			<p class="descr">
			Η διαδικτυακή εφαρμογή <span style="color: blue"><b> Healthcare Express</b></span> δημιουργήθηκε το 2021 από τον Οργανισμό Υγείας ο οποίος συστάθηκε από μία ομάδα ιατρών διαφόρων ειδικοτήτων με σκοπό τη καλυτέρη εξυπηρέτηση των πολιτών σε θέματα υγείας.
			<br><br>
			Οι ιατροί που είχαν την ιδέα υλοποίησης της διαδικτυακής εφαρμογής έκριναν πως ένα ποσοστό του πλυθησμού δεν επισκέπτεται τους ιατρούς όταν τους χρειάζεται είτε λόγω έλλειψης χρόνου είτε λόγω του ότι θεωρούν το δικό τους περιστατικό υποδυέστερο απο άλλους ασθενής και προτιμούν να τους παραχωρήσουν τη θέση τους σε ένα ραντεβού στον ιατρό ή στα νοσηλευτήρια. 
			<br><br>
			Όλοι οι ιατροί που λαμβάνουν μέρος στην εφαρμογή είναι κάτοχοι πιστοποιημένων διπλωμάτων απο τον σύλλογο ιατρών και κάτοχοι άδειας εξάσκησης του επαγγέλματος.
			<br><br>
			Οι ιατροί που λαμβάνουν μέρος στο πρόγραμμα <span style="color: blue"><b> Healthcare Express</b></span>, μπορεί να είναι ιδιώτες τους οποίους οι πολίτες μπορουν να επισκεφτούν στο προσωπικό τους χώρο, είτε σε κάποιο νοσηλευτήριο.
			<br>				
			</p>
			<br><br>
		</div>

		<br><br><br><br><br><br>
		<hr class="new1">
		<nav class="footer-nav" role="navigation">
			<p style="font-size: 17px; font-family: Helvetica">Copyright &copy; 2021 Healthcare Express. All rights reserved.</p>
		</nav>
	</body>
</html>