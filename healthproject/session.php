<?php
//Start the session
session_start();
//if the user is arleady logged in then redirect user to login page
if (isset($_SESSION["userid"]) && $_SESSION["userid"]===true){
  header("location: login.php");
  exit;
}
 ?>
