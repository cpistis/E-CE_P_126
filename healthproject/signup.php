<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sign Up - Healthcare Express</title>
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
	      background-color: blue; /*#04AA6D*/
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
	      border-radius: 25px;
	      padding: 10px 18px;
	      margin-left: 5px;
	      border: none;
	      cursor: pointer;
	      background-color: lightgrey; /* #f44336*/
	    }

	    span.psw {
	      float: right;
	      margin-right: 5px;
	      padding-top: 16px;
	    }

	    p.donthave{
	    	text-align: center;
	    	font-size: 12px;
	    }

	    a.donthave{
	    	text-decoration: none;
	    	color: black;
	    	cursor: pointer;
	    }

	    .btn1{
	    	color: white;
	    	text-decoration: none;
	    }

	    .btn2{
	    	color: black;
	    	text-decoration: none;
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
		  <a href="./contactus.php">Επικοινωνία</a>
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

		<br><br><br><br><br><br>

		<form method="post">
			<br>
			<div class="container">
				<label for="fname" style="margin-left: 5px;">First Name</label>
				<input type="text" placeholder="Enter First Name" name="fname" required>

				<label for="lname" style="margin-left: 11px;">Last Name</label>
				<input type="text" placeholder="Enter Last Name" name="lname" required>

				<label for="email" style="margin-left: 5px;">Email</label>
				<input type="text" placeholder="Enter Email" name="email" required>

				<label for="phone" style="margin-left: 5px;">Telephone</label>
				<input type="text" placeholder="Enter Telephone" name="phone" required>

				<label for="uname" style="margin-left: 5px">Username</label>
				<input type="text" placeholder="Enter Username" name="username" required>

				<label for="pass" style="margin-left: 5px">Password</label>
				<input type="password" placeholder="Enter Password" name="pass" required>

				<button class="login" type="submit"><a class="btn1"><b>Sign Up</b></a></button>
			</div>

			<div class="container">
		       	<button type="button" class="cancelbtn"><a class="btn2" href="./home2.php"><b>Cancel</b></a></button>
		    </div>
		    <br><br>
		</form>

		<br><br><br><br><br><br>
		<hr class="new1">
		<nav class="footer-nav" role="navigation">
			<p style="font-size: 17px; font-family: Helvetica">Copyright &copy; 2021 Healthcare Express. All rights reserved.</p>
		</nav>

	</body>
</html>

<?php
require_once "config.php";
require_once "session.php";

if ($_SERVER['REQUEST_METHOD']=='POST'){
  $first_name= trim($_POST['fname']); 
  $last_name= trim($_POST['lname']);
  $email= trim($_POST['email']);
  $telephone= trim($_POST['phone']);
  $username= trim($_POST['username']);
  $password= trim($_POST['pass']);
  $password_hash=password_hash($password, PASSWORD_BCRYPT);
	

  
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
	if (empty($telephone)){
	    echo( "Please enter telephone.");	
	}
	  else{echo ($telephone);}
	if (empty($username)){
	    echo( "Please enter username.");	
	}
	  else{echo ($username);}
 
	if (empty($password)){
	    echo( "Please enter password.");	
	}
	  else{echo ($password);}
 
  if($query = $db->prepare("SELECT * FROM Users WHERE Email = ?")){

    $error= '';
    // Bind parameters (s=string i=int b =blob,etc)in our case theusername is a string so weuse "S"
    $query->bind_param('s',$Email);
    $query->execute();
    // store the result so we can check if the account exists in the database.
    $query->store_result();
      if ($query->num_rows>0){
        $error.='<p class="error">The email address is already registered!</p>';
      }else{
        //valid password
        if(strlen($password)<=6){
          $error.= '<p class="error">Password must have atleast 6 characters.</p>';
        }
	
        if (empty($error)){
        	echo "IN";
          $insertQuery = $db->prepare("INSERT INTO Users (Firstname,Lastname,Email,Telephone,Username,Password) VALUES(?,?,?,?,?,?);");
          $insertQuery->bind_param("sssiss",$first_name,$last_name,$email,$telephone,$username,$password_hash);
          $result = $insertQuery->execute();
          if ($result){
            $error.= '<p class="success">Your registration was successful!</p>';
		header("location:./signup.php");
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
        echo $error;
      }
   }

}
 ?>