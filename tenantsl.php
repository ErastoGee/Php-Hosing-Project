 
<?php


session_start();
if(!isset($_SESSION['id'])){
	
	echo "Access Denied";
	header("refresh=0; url = home.php");
}else{
include 'sessions.php';

include "navbar.php";
include "main2.html";
// include "main1.html";
echo "<center><strong>";
echo "List of tenants living in Jancid";
echo"</strong></center></br>";

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

</tr>

<?php
while ($row = mysqli_fetch_assoc($query)){

	// $id = $row['id'];
	$name= $row['name'];
	// $email= $row['email'];
	$room= $row['room'];

	$id= $row['id'];

?>
<tr>
	<td class="mwitu1">
	<a href ="tenants1.php?names=<?php echo $name; ?>&id=<?php echo $id; ?>&room=<?php echo $room; ?>"><?php echo $room; echo"image"; ?></a>
	</td> 

	<td class="mwitu1"> <?php echo $name; ?></td>
</tr>



<?php } ?>


</table>


<br>

<center>
	<br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
	$prev= $page-1;
$next= $page+1;

if ($page>1){

echo "<a href= 'tenants.php?page=$prev'>Prev</a>&nbsp";

}

if ($pages >=1){

for ($x=1;$x<=$pages;$x++){

	echo ($x==$page) ? '<b><a href="?page='.$x.'">'.$x. '</a></b>':'<a href="?page='.$x.'">'.$x. '</a>';

	echo "&nbsp";


}

  }



if($page<$pages){
echo "<a href= 'tenants.php?page=$next'>Next</a>";
}
	echo "</center>";



	mysqli_close($con);
	echo "<center>";


	// include ('links.php');

	echo "</center>";

}

?>



