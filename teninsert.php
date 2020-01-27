<?php

session_start();
if(!isset($_SESSION['id'])){
	
	echo "Access Denied";
	header("refresh=0; url = home.php");
}else{

if (isset($_POST['submit'])) {






$name = $_POST ['name'];

$id = $_POST['id'];

$phone = $_POST['phone'];

$room = $_POST['room'];

$relative = $_POST['relative'];

$relphone=$_POST['relphone'];

$previous=$_POST['previous'];


$comment=$_POST['comment'];


if ($name && $id && $phone && $room && $relative && $relphone){

	$mypic=$_FILES['upload']['name'];
$temp=$_FILES['upload']['tmp_name'];
$typearr=explode(".", $mypic);
$type=strtolower("image/".$typearr[1]);

	#if (preg_match("/^[_\.0-9a-zA-z-]+@([0-9a-zA-z-][0-9a-zA-z-]+\.)+[0-9a-zA-z](2,6)$/i",$email)){


		if (($room > 0) && ($room<101)){

		if (is_numeric($room)){

			if (is_numeric($id)) {

				if((strlen($id) > 6) && (strlen($id) < 12)){
					if(strlen($phone)==10){
							if(strlen($relphone)==10){




	$con= mysqli_connect("localhost", "root", "") or die ("we couldnt connect!");

	mysqli_select_db($con, "jancid");

	// $username = mysqli_query ($con, "SELECT name FROM teninsert WHERE name = '$name'");
	// $count = mysqli_num_rows($username);

	$rid = mysqli_query ($con, "SELECT id FROM teninsert WHERE id = '$id'");
	$checkid = mysqli_num_rows ($rid);


if ($checkid !=0){

	echo "<center>";

	// include ('links.php');

	echo "That id already exists";
	echo "</center>";
	header("Refresh:10; url=registert.php");


}else{	
	


	if(($type=="image/jpeg") || ($type=="image/jpg") || ($type=="image/bmp")){


			$directory= "./tenant/profiles/$id/";
				if (!is_dir($directory)) {
					mkdir($directory, 0777, true);
		}


		// $directory= "./profiles/$room/images/";
		// mkdir($directory, 0777, true);

		move_uploaded_file ($temp, "tenant/profiles/$id/$mypic");
		// include ('Navbar.php');
		echo " what a pretty face<br/><img border= '1' width='100' height='100' src='tenant/profiles/$id/$mypic'><p>";
		
mysqli_query ($con, "INSERT INTO teninsert (name, id, room, phone, relative, relphone, previous, comments) values ('$name', '$id','$room','$phone', '$relative', '$relphone', '$previous', '$comment' )");

$registered = mysqli_affected_rows($con);

echo "You have been registered successfully";

// include "home.php";

header("Refresh:3; url=home.php");



mysqli_close($con);

}else{

	echo "This file has to be a picture boy";
}
}



}else{ ?>


	<script>
		alert("Sorry! The relative's phone number <?php echo $relphone ?> is not valid");
		window.location.assign("registert.php");
	</script>

	<?php
}
}else{ ?>

	



<script>
		alert("Sorry! Your phone number <?php echo $id ?> is too short");
		window.location.assign("registert.php");
	</script>

	<?php
}

}else{ ?>

	


<script>
		alert("Sorry! The id number <?php echo $id ?> is either too short or too long");
		window.location.assign("registert.php");
	</script>

	<?php

}
}else{ ?>

	

	<script>
		alert("Sorry! The id number <?php echo $id ?> is not a number");
		window.location.assign("registert.php");
	</script>


	<?php

}
}else{
?>
	


<script>
		alert("Sorry! The room number <?php echo $id ?> is not a number");
		window.location.assign("registert.php");
	</script>

<?php
}

}else{
	?>


	
	<script>
		alert("Sorry! The room number <?php echo $id ?> does not exist");
		window.location.assign("registert.php");
	</script>


	<?php
}



}else{ ?>

<script>
		alert("Dear user you have to fill in all the fields");
		window.location.assign("registert.php");
	</script>


	<?php
}
}
}
?>