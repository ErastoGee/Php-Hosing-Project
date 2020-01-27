 
<?php
session_start();
if(!isset($_SESSION['id'])){
	
	echo "Access Denied";
	header("refresh=0; url = home.php");
}else{


include "navibar.php";
include "main.html";?>

<!-- <center><strong>"; -->
<h2>List of today's visitors
</h2>
<!-- </strong></center> --></br>

<?php

$con = mysqli_connect ("localhost", "root", "") or die ("We failed to connect you dear user");

mysqli_select_db($con, "jancid");


$per_page=6;
$query = mysqli_query($con,"SELECT * FROM visitors LIMIT 6,6");

$pages_query = mysqli_query($con," SELECT * FROM visitors ");

$pages = ceil(mysqli_num_rows($pages_query)/$per_page);

$page = (isset($_GET ['page'])) ? (int)$_GET['page']:1;

$start= $page<1? 1:($page -  1)*($per_page);

$query = mysqli_query($con,"SELECT * FROM visitors LIMIT $start,$per_page");?>




	<table border="1px" class="mwitu">
<div class= "decoration" >
<tr >
	<td class="mwitu1 mwitu2">ROOM</td>

	<td class="mwitu1 mwitu2">NAME</td>

	<td class="mwitu1 mwitu2">NATIONAL</td>

	<!-- <td class="mwitu1">DURATION</td> -->

	<td class="mwitu1 mwitu2">VIEW</td>



</tr>
</div>

<?php
while ($row = mysqli_fetch_assoc($query)){

	$name= $row['name'];
	$room= $row['room'];
	$id= $row['id'];
	$duration= $row['duration'];
	$phone= $row['phone'];

?>

<tr>
	<!-- <td class="mwitu1">
	<a href ="tenants1.php?names=<?php echo $name; ?>&room=<?php echo $room; ?>"><?php echo $room; ?></a>
	</td> --> 

	<td class="mwitu1"><?php echo $room; ?></td>

	<td class="mwitu1"><?php echo $name; ?></td>

	<td class="mwitu1"><?php echo $id; ?></td>

	<td class="mwitu1">
		
		<a href= "visitors1.php?names=<?php echo $name; ?> &room=<?php echo $room;?> &id=<?php echo $id;?>&phone=<?php echo $phone;?> &duration=<?php echo $duration;?>">View</a>

		</td>
</tr>










	<!-- echo "<tr>
	<td align = center>
			$room		
	</td>

	<td> $name</td><td> $id</td>
		<td>
	<a href = \"visitors1.php?names=$name&room=$room&id=$id&duration=$duration\">View</a>
		</td>
	</tr>" ;  -->



<?php } ?>


	</table>
	<br><br><br><br><br><br>

<?php

echo "<center>";
	$prev= $page-1;
$next= $page+1;

if ($page>1){

echo "<a href= 'visitors.php?page=$prev'>Prev</a>&nbsp";

}

if ($pages >=1){

for ($x=1;$x<=$pages;$x++){

	echo ($x==$page) ? '<b><a href="?page='.$x.'">'.$x. '</a></b>':'<a href="?page='.$x.'">'.$x. '</a>';

	echo "&nbsp";


}

  }
if($page<$pages){
echo "<a href= 'visitors.php?page=$next'>Next</a>";
}
	echo "</center>";



	mysqli_close($con);
	echo "<center>";


	// include ('links.php');

	echo "</center>";

}


?>


