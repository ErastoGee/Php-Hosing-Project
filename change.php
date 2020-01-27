<?php
session_start();
if(!isset($_SESSION['id'])){
	
	echo "Access Denied";
	header("refresh=0; url = home.php");
}else{

$newid = $_REQUEST['newid'];
$newname = $_REQUEST['newname'];
$room = $_REQUEST['newroom'];
$newphone = md5($_REQUEST['newphone']);
$newrelative=$_REQUEST['newrelative'];
$newrelphone= $_REQUEST['newrelphone'];

$con = mysqli_connect ("localhost", "root", "") or die ("Sorry! We couldn't connect you");

mysqli_select_db($con, "jancid");

mysqli_query ($con, "UPGRADE teninsert SET (name, id, room, phone, relative, relphone) values('$newname','$newid','$room','newphone','newrelative',newrelphone) WHERE room = '$room' ");
 

 echo "your values have been updated successfully";
 ?>

 <script>
		alert("The values have been updated successfully");
		window.location.assign("tenantc.php");
	</script>


 <?php

  mysqli_close($con);


 // include ("links.php");
}

?>