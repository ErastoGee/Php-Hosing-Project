<?php 

session_start();

$expire= time()-86400;
setcookie('jancid',$_SESSION['id'],$expire);

session_destroy();

echo "You are logged out";
// include 'Navbar.php';

header("Refresh:0; url=jhome.html");

?>