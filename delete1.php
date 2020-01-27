

<?php 

session_start();
if(!isset($_SESSION['id'])){
	
	echo "Access Denied";
	header("refresh=0; url = home.php");
}else{

	include 'Navbar.php';
include 'main.html';


$con = mysqli_connect ("localhost", "root", "") or die ("We failed to connect you fucker");

mysqli_select_db($con, "jancid");




$result = mysqli_query($con,"SELECT * FROM teninsert WHERE room = '".$_REQUEST['room']." '");

?>


<table border="1px" class="mwitu">

<tr  >
	<td class="mwitu1 mwitu2">ROOM</td>

	<td class="mwitu1 mwitu2">NAME</td>

</tr>



<?php



while ($row = mysqli_fetch_array($result)){

	$name= $row['name'];
	$room= $row['room'];

	$id= $row['id'];
	$phone= $row['phone'];
	$relative= $row['relative'];
	$relphone= $row['relphone'];
	$relphone= $row['relphone'];

?>


<tr>

	<td class="mwitu1">
					<a href = "delete.php?name=<?php echo$name;?>&room=<?php echo $phproom;?>&id=<? echo $id;?>&phone=<?php echo$phone;?>&relative=<?php echo$relative;?>&relphone=<?php echo $relphone;?>"><?php echo $room;?></a>
				</td>

				<td class="mwitu1"> <?php echo $name; ?></td>
			</tr>



<?php } ?>


	</table>

	<br><br><br><br><br><br><br><br><br><br><br>

	<?php

	mysqli_close($con);




?>

<form  method="POST" action = "delete2.php" >

<h2> Are you sure you want to evacuate this room </h2>
<center>
<input type = "submit"  name = "submit" value = "ok" />
</center>
<input type= "hidden" name = "room" value = "<?php echo $_REQUEST['room'];?>" />
<input type= "hidden" name = "name" value = "<?php echo $_REQUEST['name'];?>" />
<input type= "hidden" name = "id" value = "<?php echo $_REQUEST['id'];?>" />
<input type= "hidden" name = "phone" value = "<?php echo $_REQUEST['phone'];?>" />
<input type= "hidden" name = "relative" value = "<?php echo $_REQUEST['relative'];?>" />
<input type= "hidden" name = "relphone" value = "<?php echo $_REQUEST['relphone'];?>" />
<input type= "hidden" name = "comment" value = "<?php echo $_REQUEST['comments'];?>" />







</form>

<?php
}
 ?>
