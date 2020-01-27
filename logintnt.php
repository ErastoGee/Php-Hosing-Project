<?php 



if(isset($_POST['submit'])){
	

if(!empty($_REQUEST['name']) && !empty($_REQUEST['password'])){

$con= mysqli_connect("localhost", "root", "", "jancid") or die ("we couldn't connect!");
// mysqli_select_db($con, );

$query= mysqli_query($con,"SELECT * FROM teninsert WHERE room='".$_REQUEST['name']."'");


$numrows = mysqli_num_rows($query);
// echo $numrows;	

if($numrows!=0){



	while($row=mysqli_fetch_assoc($query)){

		$dbid= $row['room'];
		$dbpassword= $row['id'];



	}


	if($_REQUEST['name']==$dbid){

		if($_REQUEST['password']== $dbpassword){
			if(($_POST['remember'])=='on'){

				$expire= time()+86400;
				setcookie('jancid', $_POST['name'], $expire);

			}
			session_start();

			$_SESSION['id']= $_POST['password'];

			// echo "You are in";
			header("location: tenants.php");

		}else{

			echo "Wrong password, check again";
		}
	}else{

		echo "That name does not exist in our databases";
	}

}else{

	echo "User not registered";

}



}else{

echo "You have to type both name and email correctly";

}
}else{

	echo "Access Denied";
}


 ?>