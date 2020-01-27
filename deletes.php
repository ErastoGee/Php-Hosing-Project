 
<?php
session_start();
if(!isset($_SESSION['id'])){
	
	echo "Access Denied";
	header("refresh=0; url = home.php");
}else{


include "Navbar.php";
include "main.html";
echo "<br/>";?>



<h2>choose the room you want to evacuate</h2>

<?php
$con = mysqli_connect ("localhost", "root", "") or die ("We failed to connect you fucker");

mysqli_select_db($con, "jancid");


$per_page=6;
$query = mysqli_query($con,"SELECT * FROM watchman LIMIT 6,6");

$pages_query = mysqli_query($con," SELECT * FROM watchman ");

$pages = ceil(mysqli_num_rows($pages_query)/$per_page);

$page = (isset($_GET ['page'])) ? (int)$_GET['page']:1;

$start= $page<1? 1:($page -  1)*($per_page);

$query = mysqli_query($con,"SELECT * FROM watchman LIMIT $start,$per_page");

?>

<table border="1px" class="mwitu">

<tr  >
	<td class="mwitu1 mwitu2">ID</td>

	<td class="mwitu1 mwitu2">NAME</td>

	</tr>

	<?php


while ($row = mysqli_fetch_assoc($query)){

	$name= $row['name'];
	

	$id= $row['id'];
	$phone= $row['pno'];
	
	
?>

<tr>
	<td class="mwitu1">
					<a href = "deletes1.php?name=<?php echo$name;?>&id=<?php echo $id;?>&phone=<?php echo$phone;?>"><?php echo $id;?></a>
	</td>

	<td class="mwitu1"> <?php echo $name; ?></td>

</tr>


<?php } ?>



	</table>
	<br><br><br><br><br><br><br><br>

<?php
	echo "<br>";

	echo "<center>";

	$prev= $page-1;
$next= $page+1;

if ($page>1){

echo "<a href= 'deletes.php?page=$prev'>Prev</a>&nbsp";

}

if ($pages >=1){

for ($x=1;$x<=$pages;$x++){

	echo ($x==$page) ? '<b><a href="?page='.$x.'">'.$x. '</a></b>':'<a href="?page='.$x.'">'.$x. '</a>';

	echo "&nbsp";


}

  }
if($page<$pages){
echo "<a href= 'deletes.php?page=$next'>Next</a>";
}
	echo "</center>";



	mysqli_close($con);
	echo "<center>";


	// include ('links.php');

	echo "</center>";

}

?>



