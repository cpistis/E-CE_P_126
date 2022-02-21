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
		/*.welcomenote{
			color: red;
		}*/

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
		.next {
		  cursor: pointer;
		  position: absolute;
		  top: 50%;
		  width: auto;
		  padding: 16px;
		  margin-top: -40px;
		  margin-right: 280px;
		  color: black;
		  font-weight: bold;
		  font-size: 18px;
		  transition: 0.6s ease;
		  border-radius: 0 3px 3px 0;
		  user-select: none;
		}
		.prev{
		  cursor: pointer;
		  position: absolute;
		  top: 50%;
		  width: auto;
		  padding: 16px;
		  margin-top: -40px;
		  margin-left: 240px;
		  color: black;
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

		/* CALENDAR STYLE */
		table.calendar{
  	  	width:60%; 
  	  	border:1px solid #000;
  	  	margin-left: 250px;
  	  	margin-top: -35px;
	  	  }
	  	  td.day{
	  	  	width: 10%; 
	  	  	height: 100px; 
	  	  	border: 1px solid #000; 
	  	  	vertical-align: top;
	        background-color: white;
	  	  }
	  	  td.day span.day-date{
	  	  	width: 10%; 
	  	  	height: 100px; 
	  	  	font-size: 14pt; 
	  	  	font-weight: 700;
	  	  }
	  	  th.header{
	  	  	background-color: #003972; 
	  	  	color: #fff; 
	  	  	font-size: 14pt; 
	  	  	padding: 5px;
	  	  }
	  	  .not-month{
	  	  	background-color: lightgrey;   /*#a6c3df*/
	  	  }
	  	  td.today {
	  	  	width: 10%; 
	  	  	height: 100px; 
	  	  	background-color: cyan;   /*#efefef*/
	  	  }
	  	  td.day span.today-date{
	  	  	width: 10%; 
	  	  	height: 100px; 
	  	  	font-size: 16pt;
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

		<script type="text/javascript">
    function send_date(value){
        window.location.replace("event.php?date="+value);
    }
</script>
<?php
    session_start();

  	function build_calendar($month,$year,$dateArray) {
	
       // Create array containing abbreviations of days of week.
       $daysOfWeek = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');

       // What is the first day of the month in question?
       $firstDayOfMonth = mktime(0,0,0,$month,1,$year);

       // How many days does this month contain?
       $numberDays = date('t',$firstDayOfMonth);

       // Retrieve some information about the first day of the
       // month in question.
       $dateComponents = getdate($firstDayOfMonth);

       // What is the name of the month in question?
       $monthName = $dateComponents['month'];

       // What is the index value (0-6) of the first day of the
       // month in question.
       $dayOfWeek = $dateComponents['wday'];

       // Create the table tag opener and day headers

       $calendar = "<table class='calendar'>";
       $calendar .= "<caption>$monthName $year</caption>";
       $calendar .= "<tr>";

       // Create the calendar headers

       foreach($daysOfWeek as $day) {
            $calendar .= "<th class='header'>$day</th>";
       } 

       // Create the rest of the calendar

       // Initiate the day counter, starting with the 1st.

       $currentDay = 1;

       $calendar .= "</tr><tr>";

       // The variable $dayOfWeek is used to
       // ensure that the calendar
       // display consists of exactly 7 columns.

       if ($dayOfWeek > 0) { 
            $calendar .= "<td colspan='$dayOfWeek' class='not-month'>&nbsp;</td>"; 
       }
       
       $month = str_pad($month, 2, "0", STR_PAD_LEFT);
    
       while ($currentDay <= $numberDays) {

            // Seventh column (Saturday) reached. Start a new row.

            if ($dayOfWeek == 7) {

                 $dayOfWeek = 0;
                 $calendar .= "</tr><tr>";

            }
            
            $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
            
            $date = "$year-$month-$currentDayRel";
            
            if ($date == date("Y-m-d")){
             $calendar .= "<td class='day today' rel='$date' onclick=send_date('$date')><span class='today-date'>$currentDay</span>";
             $appointments = check_day($date,$dates);
             if ($appointments!=null){
                 foreach ($appointments as $appointment)
                 $calendar.="<p>".$appointment[0]. " ".$appointment[1]. " code:".$appointment[6]."</p>";
             }
            $calendar.="</td>";
            }
            else{
             $calendar .= "<td class='day' rel='$date'  onclick=send_date('$date')><span class='day-date'>$currentDay</span>";
             $appointments = check_day($date,$dates);
             if ($appointments!=null){
                 foreach ($appointments as $appointment)
                     $calendar.="<p>".$appointment[0]. " ".$appointment[1]. " Doctor:".$appointment[5]."</p>";
             }
            $calendar.="</td>";
            }
            
        
            

            // Increment counters
   
            $currentDay++;
            $dayOfWeek++;

       }
       
       

       // Complete the row of the last week in month, if necessary

       if ($dayOfWeek != 7) { 
       
            $remainingDays = 7 - $dayOfWeek;
            $calendar .= "<td colspan='$remainingDays' class='not-month'>&nbsp;</td>"; 

       }
       
       $calendar .= "</tr>";

       $calendar .= "</table>";

       return $calendar;

  }

  function build_previousMonth($month,$year){
   
   $prevMonth = $month - 1;
    
    if ($prevMonth == 0) {
     $prevMonth = 12;
    }
    
   if ($prevMonth == 12){  
    $prevYear = $year - 1;
   } else {
    $prevYear = $year;
   }
   
   $dateObj = DateTime::createFromFormat('!m', $prevMonth);
   $monthName = $dateObj->format('F'); 
   
   return "<div class='prev';'><a style='color:black;text-decoration:none' href='?m=" . $prevMonth . "&y=". $prevYear ."'><- " . $monthName . "</a></div>";
  }

  function build_nextMonth($month,$year){
   
   $nextMonth = $month + 1;
    
    if ($nextMonth == 13) {
     $nextMonth = 1;
    }
   
   if ($nextMonth == 1){  
    $nextYear = $year + 1;
   } else {
    $nextYear = $year;
   }
   
   $dateObj = DateTime::createFromFormat('!m', $nextMonth);
   $monthName = $dateObj->format('F');
 
   return "<div class='next';'><a style='color:black;text-decoration:none' href='?m=" . $nextMonth . "&y=". $nextYear ."'>" . $monthName . " -></a></div>";
  }


  ?> 

  	<?php

	     parse_str($_SERVER['QUERY_STRING']);  
	   
	     if ($m == ""){
	      
	      $dateComponents = getdate();
	      $month = $dateComponents['mon'];
	      $year = $dateComponents['year'];
	     } else {
	     
	       $month = $m;
	       $year = $y;
	     
	     }
	     require_once "config.php";
	     require_once "session.php";
		 function get_dates($month){
				$query= $db->prepare("SELECT * FROM Appointments WHERE month(date)=?");
				$query->bind_param('s',$month);
		        $query->execute();
		 		$resultSet= $query->get_result();
				$result=$resultSet->fetch_all();

		 return $result;
		 }
		 function check_day($day, $dates){
		      $results = array();
		      foreach ($dates as $date){
		          if ($date[6] == $day){
		              array_push($results,$date);
		          }
		      }
		      return $results;
		  }
		   echo build_previousMonth($month, $year);
		   echo build_nextMonth($month,$year);
		   echo build_calendar($month,$year,$dateArray);


	?>



<!-- prev month: style='width: 33%; margin-left:250px; margin-top:150px; display:inline-block;' -->
<!-- next month: style='width: 33%; margin-top: 100px; display:inline-block;'
				 style='width: 33%; display:inline-block; text-align:right;'
         <div>&nbsp;</div>
 -->

		

		


		

		<br><br><br><br><br><br>
		<hr class="new1">
		<nav class="footer-nav" role="navigation">
			<p style="font-size: 17px">Copyright &copy; 2021 Healthcare Express. All rights reserved.</p>
		</nav>
	</body>
</html>