

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




$result = mysqli_query($con,"SELECT * FROM watchman WHERE id = '".$_REQUEST['id']." '");

?>


<table border="1px" class="mwitu">

<tr  >
	<td class="mwitu1 mwitu2">ID</td>

	<td class="mwitu1 mwitu2">NAME</td>

</tr>



<?php



while ($row = mysqli_fetch_array($result)){

	$name= $row['name'];

	$id= $row['id'];
	$phone= $row['pno'];
	

?>


<tr>

	<td class="mwitu1">
					<a href = "deletes.php?name=<?php echo$name;?>&room=<?php echo $phproom;?>&id=<? echo $id;?>&phone=<?php echo$phone;?>&relative=<?php echo$relative;?>&relphone=<?php echo $relphone;?>"><?php echo $id;?></a>
				</td>

				<td class="mwitu1"> <?php echo $name; ?></td>
			</tr>



<?php } ?>


	</table>

	<br><br><br><br><br><br><br><br><br><br><br>

	<?php

	mysqli_close($con);




?>

<form  method="POST" action = "deletes2.php" >

<h2> Are you sure you want to delete the soldier <?php  echo $_REQUEST['name']; ?> </h2>
<center>
<input type = "submit"  name = "submit" value = "ok" />
</center>
<input type= "hidden" name = "name" value = "<?php echo $_REQUEST['name'];?>" />
<input type= "hidden" name = "id" value = "<?php echo $_REQUEST['id'];?>" />
<input type= "hidden" name = "phone" value = "<?php echo $_REQUEST['phone'];?>" />





</form>

<?php
}
 ?>
