
<?php



session_start();
if(!isset($_SESSION['id'])){
	
	echo "Access Denied";
	header("refresh=0; url = home.php");
}else{ 
	include "Navibar.php";
	include "main.html"; ?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="Navbar.css">
	<title></title>
</head>
<body>


<?php 
if(!isset($_REQUEST['room'])){

	echo "Ooooops. Something went wrong";

}else{
	



	echo "<center>";		

	// src='caretakers/$room/images/$mypic'
	// echo $_REQUEST['room'];

	$dir= "tenant/profiles/".$_REQUEST['id'];
	if(!file_exists($dir)){
	}else{

	$open= opendir($dir);
	while(($file=readdir($open))!=false){
		if($file!="." && $file!=".." && $file!="Thumbs.db"){


			echo "<img id='img'   src= '$dir/$file'>";
			echo "<br/>";
		}



	}
}


$con = mysqli_connect("localhost", "root", "") or die ("we failed to connect you");

	mysqli_select_db($con, "jancid");
	$query =mysqli_query($con, "SELECT * FROM teninsert WHERE room ='".$_REQUEST['room']." '");

	// $query = mysqli_query($con, $query);
	$num = mysqli_num_rows($query);

	// $num = mysqli_num_rows($query);
	while ($row = mysqli_fetch_array($query)){
	

			$room = $row['room'];
			$name = $row['name'];
			$ids=$row['id'];
			$phone=$row['phone'];
			$relative=$row['relative'];
			$relphone=$row['relphone'];
			$relphone=$row['previous'];
			$comments=$row['comments'];


		}

		echo "<strong>"."Room No:"."</strong>"."&nbsp"."&nbsp";
		echo $room;
		echo "<br/>"."<strong>"."Name:"."</strong>"."&nbsp"."&nbsp".$name;
		echo "<br/>"."<strong>"."Nat ID:"."</strong>"."&nbsp"."&nbsp".$ids;

		echo "<br/>"."<strong>"."Phone:"."</strong>"."&nbsp"."&nbsp".$phone;
		echo "<br/>"."<strong>"."Relative:"."</strong>"."&nbsp"."&nbsp".$relative;
		echo "<br/>"."<strong>"."Relative Phone:"."</strong>"."&nbsp"."&nbsp".$relphone;



	mysqli_close($con);
}

echo "</center>";

// else{

// 	echo "Access denied";
// }


?>



<form  method="POST" action = "delete2.php" >

<h2> Are you sure you want to evacuate this room </h2>
<center>
<input type = "submit"  name = "submit" value = "Evacuate" />
</center>
<input type= "hidden" name = "room" value = "<?php echo $room;?>" />
<input type= "hidden" name = "name" value = "<?php echo $name;?>" />
<input type= "hidden" name = "id" value = "<?php echo $id;?>" />
<input type= "hidden" name = "phone" value = "<?php echo $phone;?>" />

<input type= "hidden" name = "relative" value = "<?php echo $relative;?>" />

<input type= "hidden" name = "previous" value = "<?php echo $previous;?>" />

<input type= "hidden" name = "relphone" value = "<?php echo $relphone;?>" />

<input type= "hidden" name = "comment" value = "<?php echo $comments;?>" />

</form>
</body>
</html>

<?php } ?>