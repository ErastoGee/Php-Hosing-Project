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
	include "navbar.php";
		// include "main1.html";


	echo "<center>";		

	// src='caretakers/$room/images/$mypic'
	// echo $_REQUEST['room'];
	

	$dir= "tenant/profiles/".$_REQUEST['id'];
	if(!file_exists($dir)){
	}else{

	$open= opendir($dir);
	while(($file=readdir($open))!=false){
		if($file!="." && $file!=".." && $file!="Thumbs.db"){


			echo "<img id='img' height = '10PX' width ='10PX'  src= '$dir/$file'>";
			echo "<br/>";
		}



	}
}


$con = mysqli_connect("localhost", "root", "") or die ("we failed to connect you");

	mysqli_select_db($con, "jancid");
	$query =mysqli_query($con, "SELECT * FROM teninsert WHERE id ='".$_REQUEST['id']." '");

	// $query = mysqli_query($con, $query);
	$num = mysqli_num_rows($query);

	// $num = mysqli_num_rows($query);
	while ($row = mysqli_fetch_array($query)){
	

			$room = $row['room'];
			$name = $row['name'];



		}

		echo "<strong>"."Room No:"."</strong>"."&nbsp"."&nbsp";
		echo $room;
		echo "<br/>"."<strong>"."Name:"."</strong>"."&nbsp"."&nbsp".$name;

	mysqli_close($con);
}

echo "</center>";

// else{

// 	echo "Access denied";
}


?>

</body>
</html>