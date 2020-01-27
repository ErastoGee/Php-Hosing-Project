<?php 

session_start();
if(!isset($_SESSION['id'])){
	
	echo "Access Denied";
	header("refresh=0; url = home.php");
}else{ 



$con= mysqli_connect("localhost", "root", "") or die ("we couldnt connect!");

	mysqli_select_db($con, "jancid");

	include "navibar.php";
	include "main.html";

	// $username = mysqli_query ($con, "SELECT name FROM teninsert WHERE name = '$name'");
	// $count = mysqli_num_rows($username);
$x=1; ?>

<table border="1px" class="mwitu">

<tr  >
	<td class="mwitu1 mwitu2">ROOM</td>
</tr>


<?php

while($x <= 100) {

	$rooms = mysqli_query ($con, "SELECT room FROM teninsert WHERE room = '$x'");
	$checkroom = mysqli_num_rows ($rooms);


if ($checkroom ==0){

	?>


	<tr>

		
		<td class="mwitu1"><a href="registert.php"><?php echo $x; ?></a></td>
	</tr>



	<?php

	$x++;

	


}

$x++;
}




	?>

	</table>

<?php } ?>
