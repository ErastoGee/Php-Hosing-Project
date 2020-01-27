<?php 



if(isset($_POST['submit'])){
	session_start();

$_SESSION['name']= $_POST['name'];
$_SESSION['password']=md5($_POST['password']);

if(!empty($_SESSION['name']) && !empty($_SESSION['password'])){

$con= mysqli_connect("localhost", "root", "", "mapro") or die ("we couldn't connect!");
// mysqli_select_db($con, );

$query= mysqli_query($con,"SELECT * FROM users WHERE name='".$_SESSION['name']."'");


$numrows = mysqli_num_rows($query);
// echo $numrows;	

if($numrows!=0){



	while($row=mysqli_fetch_assoc($query)){

		$dbname= $row['name'];
		$dbpassword= $row['password'];



	}


	if($_SESSION['name']==$dbname){

		if($_SESSION['password']== $dbpassword){
			if(($_POST['remember'])=='on'){

				$expire= time()+86400;
				setcookie('mapro', $_POST['name'], $expire);

			}

			// echo "You are in";
			header("location: users.php");

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