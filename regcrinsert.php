<?php
if (isset($_POST['submit'])) {


// echo $mypic;

$name = $_POST ['name'];

$id = $_POST['id'];

$phone = $_POST['phone'];

$password = $_POST['password'];

$cpassword = $_POST['cpassword'];


if ($name && $id && $phone && $password && $cpassword){

	$mypic=$_FILES['upload']['name'];
$temp=$_FILES['upload']['tmp_name'];
$typearr=explode(".", $mypic);
$type=strtolower("image/".$typearr[1]);

	#if (preg_match("/^[_\.0-9a-zA-z-]+@([0-9a-zA-z-][0-9a-zA-z-]+\.)+[0-9a-zA-z](2,6)$/i",$email)){
	if ($password === $cpassword){

		if (strlen($password) > 6){

			if (is_numeric($id)) {

				if((strlen($id) > 6) && (strlen($id) < 12)){
					if(strlen($phone)==10){
			



					

	$con= mysqli_connect("localhost", "root", "") or die ("Sorry we couldnt connect you!");

	mysqli_select_db($con, "jancid");

	// $username = mysqli_query ($con, "SELECT name FROM teninsert WHERE name = '$name'");
	// $count = mysqli_num_rows($username);

	$rid = mysqli_query ($con, "SELECT id FROM caretakers WHERE id = '$id'");
	$checkid = mysqli_num_rows ($rid);
		


if ($checkid !=0){


	echo "<center>";

	// include ('links.php');

	die ("That id already exists");
	echo "</center>";


}else{	
	


	if(($type=="image/jpeg") || ($type=="image/jpg") || ($type=="image/bmp")){
		$directory= "./caretaker/profiles/$id/";
		if (!is_dir($directory)) {
			mkdir($directory, 0777, true);
		}
		
		

		move_uploaded_file ($temp, "caretaker/profiles/$id/$mypic");
		// include ('Navbar.php');
		echo " what a pretty face<br/><img border= '1' width='170' height='170' src='caretaker/profiles/$id/$mypic'><p>";
		$passwordmd5=md5($password);
		
mysqli_query ($con, "INSERT INTO caretakers (name, id, password, phone) values ('$name', '$id', '$passwordmd5', '$phone')");

$registered = mysqli_affected_rows($con);

echo "You have been registered successfully";

// include "home.php";

header("Refresh:3; url=caretaker.php");



mysqli_close($con);

}else{

	echo "this file has to be a picture boy";
	header("Refresh:10; url=regcr.php");
}
}
}else{

	?>

<script>
		alert("Sorry! The phone number <?php echo $id ?> is not valid");
		window.location.assign("regcr.php");
	</script>

	<!-- cho "Sorry! Your phone number".$phone."is not valid";
	header("Refresh:10; url=regcr.php"); -->


	<?php
}

}else{ ?>


	<!-- echo "Sorry! The Id number".$id." is either too short or too long";
	header("Refresh:10; url=regcr.php"); -->

<script>
		alert("Sorry! The id number <?php echo $id ?> is either too short or too long");
		window.location.assign("regcr.php");
	</script>



<?php
}
}else{
	?>


	<!-- echo "Sorry! The id number".$id."is not a number";
	header("Refresh:10; url=regcr.php") -->;

<script>
		alert("Sorry! The id number <?php echo $id ?> is not a number");
		window.location.assign("regcr.php");
	</script>

	<?php

}
}else{


	?>

	<!-- echo "Sorry! The password you have entered is too short";
	header("Refresh:10; url=regcr.php"); -->

<script>
		alert("Sorry! The password <?php echo $id ?>  you have entered is too short");
		window.location.assign("regcr.php");
	</script>



<?php
}

}else{

	?>

	<!-- echo"Passwords have to match";
	header("Refresh:10; url=regcr.php"); -->

<script>
		alert("Sorry! The passwords have to match");
		window.location.assign("regcr.php");
	</script>


	<?php
}

}
else{

	?>

<script>
		alert("Dear user you have to fill in all the fields");
		window.location.assign("regcr.php");
	</script>

	<?php
}
}
?>
