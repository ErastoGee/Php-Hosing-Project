<?php

// session_start();
// if(!isset($_SESSION['id'])){
	
// 	echo "Access Denied";
// 	header("refresh=0; url = home.php");
// }else{
if (isset($_POST['submit'])) {



$name = $_POST ['name'];

$id= $_POST['id'];

$room = $_POST['room'];

$phone = $_POST['phone'];

$relationship= $_POST['relationship'];

$duration = $_POST['duration'];


if ($name && $id && $room && $duration){

	#if (preg_match("/^[_\.0-9a-zA-z-]+@([0-9a-zA-z-][0-9a-zA-z-]+\.)+[0-9a-zA-z](2,6)$/i",$email)){

	if (($room > 0) && ($room<101)){

		if (is_numeric($room)){

			if (is_numeric($id)) {

				if((strlen($id) > 6) && (strlen($id) < 12)){

	
	$con= mysqli_connect("localhost", "root", "") or die ("we couldnt connect!");

	mysqli_select_db($con, "jancid");

	$rid = mysqli_query ($con, "SELECT id FROM visitors WHERE id = '$id'");
	$checkid = mysqli_num_rows ($rid);


if ($checkid !=0){

	echo "<center>";

	// include ('links.php');

	echo "That id already exists";
	echo "</center>";
	header("Refresh:10; url=regvisit.php");


}else{	
	



		

mysqli_query ($con, "INSERT INTO visitors (name, id, room, duration, phone, relationship) values ('$name', '$id', '$room', '$duration', '$phone', '$relationship')");

$registered = mysqli_affected_rows($con);


mysqli_close($con);
echo "You have been registered successfully";

// include "home.php";

header("Refresh:3; url=regvisit.php");
}
}

// }else{?>

// 	<script>
// 		alert("Sorry! The id number <?php echo $id ?> is too short or too long");
// 		window.location.assign("regvisit.php");
// 	</script>
// 	<!-- echo "Sorry! The Id number ".$id." is either too short or too long";
// 	header("Refresh:10; url=regvisit.php"); -->

// <?php

// }
// }else{ 

// 	?>

// 	<script>
// 		alert("Sorry! The id number <?php echo $id ?> is not a number");
// 		window.location.assign("regvisit.php");
// 	</script>
	

// <?php }
// }else{ ?>

// 	<script>
// 		alert("Sorry! The room number <?php echo $room ?> is not a number");
// 		window.location.assign("regvisit.php");
// 	</script>

// 	<?php

// }

// }else{ ?>
// 	// echo"Sorry! The room number ".$room." you have entered does not exist";
// 	/<script>
// 		alert("Sorry! The room number <?php echo $room ?> is not a number");
// 		window.location.assign("regvisit.php");
// 	</script>

// 	<?php
// }



// }else{
// 	?>

// 	<script>
// 		alert("Please fill in all the fields");
// 		window.location.assign("regvisit.php");
// 	</script>

	// <?php

// echo "you have to fill in all the fields";
// header("Refresh:10; url=regvisit.php");



// }
// }
// }

<!-- ?> -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>