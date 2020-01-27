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

$phone = $_REQUEST['phone'];

$room = $_REQUEST['room'];

$relative = $_REQUEST['relative'];

$relphone=$_REQUEST['relphone'];

$comments= $_REQUEST['comment'];


$con = mysqli_connect("localhost", "root", "") or die ("we failed to connect you fucker");

mysqli_select_db($con,"jancid");

mysqli_query($con, "DELETE FROM teninsert WHERE id ='".$id." '" ) or die (mysqli_error($con));

mysqli_query ($con, "INSERT INTO tenhistory (name, id, room, phone, relative, relphone, comments) values ('$name', '$id','$room','$phone', '$relative', '$relphone', '$comments' )");

echo $_REQUEST['room'];
echo "<P>";

?>
<script>
		alert("You have evacuated  <?php echo $name  ?> from <?php echo $room  ?> ");
		window.location.assign("tenantc.php");
	</script>


<?php
mysqli_close($con);

echo "<center>";
}

// include ('links.php'); 

}
?>
