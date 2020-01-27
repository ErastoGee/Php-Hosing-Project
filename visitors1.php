<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="Navbar.css">
	<title></title>
</head>
<body>


<?php 

session_start();
if(!isset($_SESSION['id'])){
	
	echo "Access Denied";
	header("refresh=0; url = home.php");
}else{

if(!isset($_REQUEST['room'])){

	echo "Ooooops. Something went wrong";

}else{
	include "navibar.php";





$con = mysqli_connect("localhost", "root", "") or die ("we failed to connect you");

	mysqli_select_db($con, "jancid");
	$query =mysqli_query($con, "SELECT * FROM visitors WHERE room ='".$_REQUEST['room']." '");

	// $query = mysqli_query($con, $query);
	$num = mysqli_num_rows($query);

	// $num = mysqli_num_rows($query);
	while ($row = mysqli_fetch_array($query)){
	

			$room = $row['room'];
			$name = $row['name'];
			$id = $row['id'];
			$phone= $row['phone'];
			$relationship= $row['relationship'];
			$duration = $row['duration'];




		}

		echo "<center>";

		echo "<strong>"."ROOM NO:"."</strong>"."&nbsp"."&nbsp";
		echo $room;
		echo "<br/>"."<strong>"."NAME:"."</strong>"."&nbsp"."&nbsp".$name;

		echo "<br/>"."<strong>"."ID:"."</strong>"."&nbsp"."&nbsp".$id;
		echo "<br/>"."<strong>"."DURATION:"."</strong>"."&nbsp"."&nbsp".$duration." Days";

		echo "</center>";

	// mysqli_close($con);
}


echo "</center>";

// else{

// 	echo "Access denied";
}


?>


<form  method="POST" action = "clearvisit.php" >

<h2> Are you sure you want to evacuate this room </h2>
<center>
<input type = "submit"  name = "submit" value = "clear visit" />
</center>
<input type= "hidden" name = "room" value = "<?php echo $_REQUEST['room'];?>" />
<input type= "hidden" name = "name" value = "<?php echo $name;?>" />
<input type= "hidden" name = "id" value = "<?php echo $_REQUEST['id'];?>" />
<input type= "hidden" name = "phone" value = "<?php echo $_REQUEST['phone'];?>" />
<input type= "hidden" name = "relationship" value = "<?php echo $relationship;?>" />
<input type= "hidden" name = "duration" value = "<?php echo $_REQUEST['duration'];?>" />







</form>



</body>
</html>