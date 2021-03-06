<?php
			session_start();
			require_once "config.php";
			require_once "session.php";
			$error='';
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){
				$password = trim($_POST['password']);
				//validate if password is empty 
				if (empty($password)){
				   $error .= '<p class="error">Please enter your password.</p>';	
				}
				if (empty($error)){
				    $query= $db->prepare("SELECT * FROM Providers WHERE Code=?");
					$query->bind_param('i',$password);
				        $query->execute();
					$row=$query->get_result();
				        $user=$row->fetch_assoc();
				        echo "<script>console.log('".$user["Code"]."')</script>";
				        echo "<script>console.log('".$password."')</script>";
					if ($user){
					    if ($password==$user["Code"]){
							$_SESSION["Password"] = $user['Code'];
							/*$_SESSION["fname"] = $user['Firstname'];
							$_SESSION["lname"] = $user['Lastname'];
							$_SESSION["email"] = $user['Email'];
							$_SESSION["user"] = $user;*/
							header("Location: providerpage.php");
							exit();
			            }
			            else
						  $error .='<p class="error">The password is not valid.</p>';
			        }
			        else
					  $error .='<p class="error">No User exist with that email address.</p';
				 	echo $error;
				   $query->close();
			 	}
			 	// close connection 
			 mysqli_close($db);
			}
			?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Log In - Healthcare Express</title>
		<link rel="icon" href="https://toppng.com/uploads/preview/medical-logo-png-medical-symbol-blue-11562978013og9cpflhen.png" />
	</head>
	<style>
		/* general and sidebar styling */
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

		/* form styling */
		form{
			border: 3px solid #f1f1f1;
			border-radius: 25px;
	        width: 40%;
	        margin: auto;
	        background-color: lightskyblue;
		}

		.container{
			background-color: lightskyblue;
			border-radius: 25px;
		}
		input[type=text], input[type=password] {
	      width: 90%;
	      padding: 12px 20px;
	      margin: 8px 0;
	      margin-left: 5px;
	      display: inline-block;
	      border: 1px solid #ccc;
	      box-sizing: border-box;
	    }

	    .login{
	      background-color: blue;
	      color: white;
	      padding: 14px 20px;
	      margin: 8px 0;
	      margin-left: 5px;
	      border: none;
	      cursor: pointer;
	      width: 50%;
	      border-radius: 25px;
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

	    /*span.psw {
	      float: right;
	      margin-right: 5px;
	      padding-top: 16px;
	    }*/

	    p.donthave{
	    	text-align: center;
	    	font-size: 12px;
	    }

	    a.donthave{
	    	text-decoration: none;
	    	color: black;
	    	cursor: pointer;
	    }
	</style>

	<body>

		<div id="mySidebar" class="sidebar">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">??</a>
		  <a href="./home2.php" style="cursor: pointer">????????????</a>
		  <a href="#" style="cursor: default">About Us</a>
		  <ul style="list-style-type:none">
		  	<a href="./whoweare.php" style="color: #f1f1f1; font-size: 18px" >?????????? ??????????????</a>
		  	<a  href="./purpose.php" style="color: #f1f1f1; font-size:18px">????????????</a>
		  </ul>
		  <a href="#" style="cursor: default">??????????????????</a>
		  <ul style="list-style-type:square">
		  	<a  href="./hospitals.php" style="color: #f1f1f1; font-size:18px">????????????????????</a>
		  	<a  href="./alldoctors.php" style="color: #f1f1f1; font-size:18px">????????????</a>
		  	<a  href="./pharma.html" style="color: #f1f1f1; font-size:18px">??????????????????</a>
		  </ul>
		  <a href="#">???????????????????????? ??????????????</a>
		  <a href="#">??????????????????????</a>
		  <a href="./contactus.php" style="cursor: default">Users</a>
		  <ul style="list-style-type:square">
		  	<a  href="./login.php" style="color: #f1f1f1; font-size:18px">Log In</a>
		  	<a  href="./login.php" style="color: #f1f1f1; font-size:18px"> Dr Log In</a>
		  	<a  href="./signup.php" style="color: #f1f1f1; font-size:18px">Sign Up</a>
		  </ul>
		</div>	

		<div id="main">
		  <button class="openbtn" onclick="openNav()">??? Menu</button>  
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

		<br><br><br><br><br><br>

		<form action="" method="post">
			<br>
			<div class="container">
				<label style="margin-left: 5px">Please enter your personal provider code</label>
				<input type="text" placeholder="Enter Password" name="password" required>

				<button class="login" type="submit"><a style="color:white; text-decoration: none"><b>Login</b></a></button>

				<label>
		          <input type="checkbox" checked="checked" name="remember"> Remember me
		        </label>		        
			</div>
			<div class="container">
		       	<button type="button" class="cancelbtn"><a href="./home2.php" style="color:black; text-decoration: none"><b>Cancel</b></button>
		       	<!--<span class="psw">Forgot <a href="#">password?</a></span> -->
		    </div>
		    <br><br>
		</form>

		

		<p class="donthave">Don't have an account yet? Sign Up <a href="./signup.php" class="donthave"><b>here</b></a></p>
		<p class="donthave">?????? ?????????? ?????????? ????????????????????; ???????????????????? <a href="./signup.php" class="donthave"><b>??????</b></a></p>

		<br><br><br><br><br><br>
		<hr class="new1">
		<nav class="footer-nav" role="navigation">
			<p style="font-size: 17px; font-family: Helvetica">Copyright &copy; 2021 Healthcare Express. All rights reserved.</p>
		</nav>

	</body>
</html>


