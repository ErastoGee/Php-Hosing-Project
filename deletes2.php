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
include "main.html";


$name = $_REQUEST ['name'];

$id = $_REQUEST['id'];

$phone = $_REQUEST['phone'];



$con = mysqli_connect("localhost", "root", "") or die ("we failed to connect you fucker");

mysqli_select_db($con,"jancid");

mysqli_query($con, "DELETE FROM watchman WHERE id ='".$id." '" ) or die (mysqli_error($con));

// mysqli_query ($con, "INSERT INTO tenhistory (name, id, room, phone) values ('$name', '$id','$phone')");


echo "<P>";
?>


<script>
		alert("You have deleted soldier <?php echo $name ?> ");
		window.location.assign("soldiers.php");
	</script>

<?php

mysqli_close($con);

echo "</center>";
}

// include ('links.php'); 
}

?>
