<?php 
$servername="localhost";
$username="fellades";
$password="Omonia48!";
$database="DoctorAnyTime";
$db=new mysqli($servername,$username,$password,$database);

if($db->connect_error)   
   echo "connection error:" .$db->connect_error;

?>
