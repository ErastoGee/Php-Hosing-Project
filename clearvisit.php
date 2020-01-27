<?php

session_start();
if(!isset($_SESSION['id'])){
	
	echo "Access Denied";
	header("refresh=0; url = home.php");
}else{

if(!isset($_POST['submit'])){

	header("Refresh:5; url=home.php");

	echo "something went wrong men";
}else{

// include 'session.php';

include "Navbar.php";




$name = $_REQUEST ['name'];

$id = $_REQUEST['id'];

$room = $_REQUEST['room'];

$phone = $_REQUEST['phone'];

$duration = $_REQUEST['duration'];

$relationship=$_REQUEST['relationship'];



$con = mysqli_connect("localhost", "root", "") or die ("Sorry! We failed to connect you.");

mysqli_select_db($con,"jancid");

mysqli_query($con, "DELETE FROM visitors WHERE id ='".$id." '" ) or die (mysqli_error($con));

mysqli_query ($con, "INSERT INTO vishistory (name, id, room, phone, duration, relationship) values ('$name', '$id','$room','$phone', '$duration', '$relationship' )");


echo "You have cleared the visitor";
header("Refresh:13; url=visitors.php");

mysqli_close($con);

echo "<center>";
}

// include ('links.php'); 
}

?>
