<?php session_start();
?>
<?php
require_once "config.php";
require_once "session.php";

if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
  $first_name= trim($_POST['fname']); 
  $last_name= trim($_POST['lname']);
  $email= trim($_POST['email']);
  $telephone= trim($_POST['phone']);
  $description= trim($_POST['descr']);
  $first_pname= trim($_POST['pfname']); 
  $last_pname= trim($_POST['plname']);
  $pcode= trim($_POST['pcode']);

  
	if (empty($first_name)){
	   echo( "Please enter firstname.");	
	}
	  else{echo ($first_name);}
	
	if (empty($last_name)){
	    echo( "Please enter lastname.");	
	}
	  else{echo ($last_name);}
	if (empty($email)){
	    echo( "Please enter email.");	
	}
	  else{echo ($email);}

	if (empty($description)){
	    echo( "Please enter description.");	
	}
	  else{echo ($description);}
 
	if (empty($first_pname)){
	    echo( "Please enter p first name.");	
	}
	  else{echo ($first_pname);}
	if (empty($last_pname)){
	    echo( "Please enter p last name.");	
	}
	  else{echo ($last_pname);}
	if (empty($pcode)){
	    echo( "Please enter p code.");	
	}
	  else{echo ($pcode);}

	
        if (empty($error)){
	
          $insertQuery = $db->prepare("INSERT INTO Appointments (bname,blastname,bemail,description,pname,plastname,pcode,date) VALUES(?,?,?,?,?,?,?,?);");
          $insertQuery->bind_param("ssssssis",$first_name,$last_name,$email,$description,$first_pname,$last_pname,$pcode,$_GET['date']);
          $result = $insertQuery->execute();
          if ($result){
						header("location:./success.php");
		            //$error.= '<p class="success">Your appointment was successful!</p>';
   		$query->close();
    		$insertQuery->close();
    		echo($error);
    		// close DB fann_get_total_connection
    		mysqli_close($db);
          }
          else{
            $error .='<p class="error">Something went wrong!</p>';
          }
        }

}
 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Book an Appointment - Healthcare Express</title>
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

		form{
			margin-left: 330px;

		}
		.cancelbtn {
	      width: auto;
	      padding: 10px 18px;
	      margin-left: 5px;
	      border: none;
	      cursor: pointer;
	      background-color: lightgrey;
	      border-radius: 25px;
	  }
	  .book{
	      width: auto;
	      padding: 10px 18px;
	      margin-left: 5px;
	      border: none;
	      cursor: pointer;
	      background-color: blue;
	      border-radius: 25px;
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
		

		<form method="post" >
			<h2 style="font-family: Helvetica"><u>Beneficiary</u></h2>
      	<div class="firstname" style="margin-left: 30px">
	      	<label style="font-family: Helvetica"><strong>First Name</strong></label>
	      	<br>
	      	<input value="<?php echo $_SESSION['fname']?>" style="border-radius: 10px; height: 20px" type="text" name="fname">
	    	</div>
	    	<div class="lastname" style="margin-left: 250px; margin-top: -45px">
	      	<label style="font-family: Helvetica"><strong>Last Name</strong></label>
	      	<br>
	      	<input value="<?php echo $_SESSION['lname']?>" style="border-radius: 10px; height: 20px" type="text" name="lname">
	   	  </div>
	    	<div class="Email" style="margin-left: 470px; margin-top: -45px">
	      	<label style="font-family: Helvetica"><strong>Email</strong></label>
	      	<br>
	      	<input value="<?php echo $_SESSION['email']?>" style="border-radius: 10px; height: 20px" type="text" name="email">
	    	</div>
	    <!--<div class="tel" style="margin-left: 690px; margin-top: -45px">
	      	<label style="font-family: Helvetica"><strong>Telephone</strong></label>
	      	<br>
	      	<input style="border-radius: 10px; height: 20px" type="text" name="phone">
	    </div> -->
	    	<div class="descr" style="margin-left: 30px; margin-top: 20px">
	      	<label style="font-family: Helvetica"><strong>Description</strong></label>
	      	<br>
	      	<input style="border-radius: 10px; height: 80px; width: 500px" type="text" name="descr">
	    	</div>
	    <br><br><br>
	    <h2 style="font-family: Helvetica"><u>Provider</u></h2>
      	<div class="firstname" style="margin-left: 30px">
	      	<label style="font-family: Helvetica"><strong>First Name</strong></label>
	      	<br>
	      	<input style="border-radius: 10px; height: 20px" type="text" name="pfname">
	    </div>
	    <div class="lastname" style="margin-left: 250px; margin-top: -45px">
	      	<label style="font-family: Helvetica"><strong>Last Name</strong></label>
	      	<br>
	      	<input style="border-radius: 10px; height: 20px" type="text" name="plname">
	    </div>
	    <div class="code" style="margin-left: 470px; margin-top: -45px">
	      	<label style="font-family: Helvetica"><strong>Code</strong></label>
	      	<br>
	      	<input style="border-radius: 10px; height: 20px" type="text" name="pcode">
	    </div>
	    <a href="./calendar.php"><button class="cancelbtn" style="margin-top: 90px; margin-left: 550px; text-decoration:none;color:black">Cancel</button></a>
	    <button class="book" name="submit" type="submit" value="signup"><a style="text-decoration: none; color: white">Book</a></button>
	  </form>

		<br><br><br><br><br><br>
		<hr class="new1">
		<nav class="footer-nav" role="navigation">
			<p style="font-size: 17px">Copyright &copy; 2021 Healthcare Express. All rights reserved.</p>
		</nav>
	</body>
</html>
