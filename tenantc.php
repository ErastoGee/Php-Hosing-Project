 
<?php



session_start();
include "Navibar.php";
include "main.html";


if(!isset($_SESSION['id'])){


	echo "Access Denied";
	header("Refresh:0; url=caretaker.php");
}else{


?>

<!-- <center><strong> -->
<h2>List of tenants living in Jancid</h2>
<!-- </strong></center> --></br>

<?php

$con = mysqli_connect ("localhost", "root", "") or die ("We failed to connect you dear user");

mysqli_select_db($con, "jancid");


$per_page=6;
$query = mysqli_query($con,"SELECT * FROM teninsert LIMIT 6,6");

$pages_query = mysqli_query($con," SELECT * FROM teninsert ");

$pages = ceil(mysqli_num_rows($pages_query)/$per_page);

$page = (isset($_GET ['page'])) ? (int)$_GET['page']:1;

$start= $page<1? 1:($page -  1)*($per_page);

$query = mysqli_query($con,"SELECT * FROM teninsert LIMIT $start,$per_page");
?>

<table border="1px" class="mwitu">

<tr  >
	<td class="mwitu1 mwitu2">ROOM</td>

	<td class="mwitu1 mwitu2">NAME</td>

	<td class="mwitu1 mwitu2">EDIT</td>

</tr>





<?php
while ($row = mysqli_fetch_assoc($query)){

	
	$name= $row['name'];
	$room= $row['room'];

	$id= $row['id'];
	$phone= $row['phone'];
	$relative= $row['relative'];
	$relphone= $row['relphone'];
?>

	<tr>

		<td class="mwitu1">
	<a href ="tenantc1.php?names=<?php echo $name; ?>&id=<?php echo $id;?>&room=<?php echo $room; ?>"><?php echo $room; ?></a>
	</td>
	

		<td class="mwitu1"> <?php echo $name; ?></td>

	<td class="mwitu1">
					<a href = "edit.php?name=<?php echo$name;?>&room=<?php echo $room;?>&id=<?php echo $id;?>&phone=<?php echo$phone;?>&relative=<?php echo$relative;?>&relphone=<?php echo $relphone;?>">Edit</a>
	</td>		
	</tr>



<?php } ?>


	</table>


	<br>

	<br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php
	echo "<center>";

	$prev= $page-1;
$next= $page+1;

if ($page>1){

echo "<a href= 'tenantc.php?page=$prev'>Prev</a>&nbsp";

}

if ($pages >=1){

for ($x=1;$x<=$pages;$x++){

	echo ($x==$page) ? '<b><a href="?page='.$x.'">'.$x. '</a></b>':'<a href="?page='.$x.'">'.$x. '</a>';

	echo "&nbsp";


}

  }
if($page<$pages){
echo "<a href= 'tenantc.php?page=$next'>Next</a>";
}
	echo "</center>";



	mysqli_close($con);
	echo "<center>";


	// include ('links.php');

	echo "</center>";

}


?>


