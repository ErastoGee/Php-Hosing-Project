<?php 

session_start();
if(!isset($_SESSION['id'])){
	
	echo "Access Denied";
	header("refresh=0; url = home.php");
}else{

include 'navibar.php';

if (isset($_REQUEST['submit'])){

	$search = $_GET['search'];

	$terms = explode(" ", $search);

	$query ="SELECT * FROM teninsert WHERE ";

   $i=0;
	foreach($terms as $each){
	       
			$i++;

		if($i==1){
			$query .= "room LIKE '%$each%' ";
			// $query .= "room LIKE '%$each%' ";
				
		}else {

			$query .="OR room LIKE '%$each%' ";
			// $query .="OR name LIKE '%$each%' ";

		}



	}

	$con = mysqli_connect("localhost", "root", "") or die ("we failed to connect you");

	mysqli_select_db($con, "jancid");

	$query = mysqli_query($con, $query);

	$num = mysqli_num_rows($query);


	if ($num>0 && $search != ""){

		echo "<i>";
		echo "$num results found for $search";
		echo "</i>";


		echo "<table width =\" 90%\" align = center border =2>";

echo "<tr><td width = \" 40% \"align = center bgcolor = \"FFFF00\">ROOM</td>

<td width = \" 40%\" align = center bgcolor= \" FFFF00\">NAME</td>
</tr>";

		while($row = mysqli_fetch_assoc($query)){

			$room = $row['room'];
			$name = $row['name'];
						echo "<center>";
			
			echo "<tr>
	<td align = center>
					<a href = \"tenantc1.php?room=$room&names=$name\">$room</a>
	</td>

	<td> $name</td></tr>" ;
		}


	}else{


		echo "No results found";
	}

	mysqli_close($con);


}else{


	echo "please type what you want to search for";


}

echo "<center>";

}

	?> 
