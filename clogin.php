<?php 
// session_start();

if(isset($_POST['submit'])){
	

$_REQUEST['password']=md5($_POST['password']);

if(!empty($_REQUEST['id']) && !empty($_REQUEST['password'])){

$con= mysqli_connect("localhost", "root", "", "jancid") or die ("we couldn't connect!");
// mysqli_select_db($con, );

$query= mysqli_query($con,"SELECT * FROM caretakers WHERE id='".$_REQUEST['id']."'");
$numrows = mysqli_num_rows($query);
// echo $numrows;	

if($numrows!=0){



	while($row=mysqli_fetch_assoc($query)){

		$dbid= $row['id'];
		$dbpassword= $row['password'];

	}


	if($_REQUEST['id']==$dbid){

		if($_REQUEST['password']== $dbpassword){
			if(($_POST['remember'])=='on'){

				$expire= time()+86400;
				setcookie('jancid', $_POST['id'], $expire);

			}
			session_start();
			// $_SESSION['id']= $_COOKIE['jancid'];
			$_SESSION['id']= $_POST['id'];
			header("location: tenantc.php");

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