<?php

session_start();
if(!isset($_SESSION['id'])){
	
	echo "Access Denied";
	header("refresh=0; url = home.php");
}else{
if (isset($_POST['submit'])) {


$mypic=$_FILES['upload']['name'];
$temp=$_FILES['upload']['tmp_name'];
$typearr=explode(".", $mypic);
$type=strtolower("image/".$typearr[1]);



$name = $_REQUEST ['name'];

$id = $_REQUEST['id'];

$phone = $_REQUEST['phone'];

$room = $_REQUEST['room'];

$nok = $_REQUEST['nok'];

$relkind=$_REQUEST['relphone'];


if ($name && $id && $phone && $room && $nok && $relkind){

	#if (preg_match("/^[_\.0-9a-zA-z-]+@([0-9a-zA-z-][0-9a-zA-z-]+\.)+[0-9a-zA-z](2,6)$/i",$email)){


	$con= mysqli_connect("localhost", "root", "") or die ("we couldnt connect!");

	mysqli_select_db($con, "jancid");

	// $username = mysqli_query ($con, "SELECT name FROM teninsert WHERE name = '$name'");
	// $count = mysqli_num_rows($username);

	$rid = mysqli_query ($con, "SELECT id FROM tenhistory WHERE id = '$id'");
	$checkid = mysqli_num_rows ($rid);


if ($checkid !=0){

	echo "<center>";

	// include ('links.php');

	die ("That id already exists");
	echo "</center>";


}else{	
	


	if(($type=="image/jpeg") || ($type=="image/jpg") || ($type=="image/bmp")){

		$directory= "./history/$id/images/";
		mkdir($directory, 0777, true);

		move_uploaded_file ($temp, "history/$id/images/$mypic");
		include ('Navbar.php');
		echo " what a pretty face<br/><img border= '1' width='170' height='170' src='history/$id/images/$mypic'><p>";
		
mysqli_query ($con, "INSERT INTO tenhistory (name, id, room, phone, relative, relphone) values ('$name', '$id','$room','$phone', '$nok', '$relphone' )");

$registered = mysqli_affected_rows($con);

echo "You have been registered successfully";

// include "home.php";

header("Refresh:3; url=home.php");



mysqli_close($con);

}else{

	echo "this file has to be a picture boy";
}
}

echo "<center>";

// include ('links.php');

echo "</center>";


}else{
	echo "Dear tenant you have to fill in all the fields ";
}
}
}
?>