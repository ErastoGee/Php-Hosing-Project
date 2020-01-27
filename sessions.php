<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="Navbar.css">
	<title></title>
</head>
<body>


<?php 
// $date= time();
// session_start();
// echo "<center>";

// date_default_timezone_set('Africa/Nairobi');
// $date= date('F d Y, g:i:s a');

// echo 'Today is &nbsp '.$date.'<p>';



// echo "</center>";



if(isset($_SESSION['id'])|| isset($_COOKIE['jancid'])){

	// echo $_SESSION['id'];

	if(!isset($_SESSION['id']) && isset($_COOKIE['jancid'])){

		// $_SESSION['id']= $_COOKIE['jancid'];
	}


if(!isset($_SESSION['id'])){

	echo "Session not available";

}else{

	$dir= "tenant/profiles/".$_SESSION['id'];
	// $directory= "./caretaker/profiles/$id/images/";
		if (!is_dir($dir)) {


			$dir= "caretaker/profiles/".$_SESSION['id'];

			if (!is_dir($dir)) {

				$dir= "soldier/profiles/".$_SESSION['id'];
			}
		}




	if(!file_exists($dir)){
	}else{

	$open= opendir($dir);
	while(($file=readdir($open))!=false){
		if($file!="." && $file!=".." && $file!="Thumbs.db"){


			echo "<img id='img'  src='$dir/$file'>";
		}



	}
}
	
}

}else{

	// echo "Access denied";
}


?>

</body>
</html>