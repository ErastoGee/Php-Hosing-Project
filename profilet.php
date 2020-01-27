<?php

session_start();
if(!isset($_SESSION['id'])){
	
	echo "Access Denied";
	header("refresh=0; url = home.php");
}else{
	
	// die();

 $dir= "tenant/profiles/".$_SESSION['id'];
	if(!file_exists($dir)){
		echo $_SESSION['id'];
	}else{

	$open= opendir($dir);
	while(($file=readdir($open))!=false){
		if($file!="." && $file!=".." && $file!="Thumbs.db"){


			echo "<img id='img' height = '200PX' width ='200PX'  src= '$dir/$file'>";
			echo "<br/>";
		}



	}
}
}
?>