<!DOCTYPE>
<html>
<head>
<link rel="stylesheet" type="text/css" href="Navbar.css"/>
<meta charset="utf-8">
	<title>Navibar</title>
</head>


<header>

<div class="container">

<!-- <img src="1.jpg"> -->

<nav>
	<!-- <ul>
	<li><a href ="home.php">home</a></li>
	<li><a href="forms.php">Register</a></li>
	<li><a href="update.php">Edit user</a></li>
	<li><a href ="delete.php">Delete user</a></li>
	<li><a href="output.php">view users</a></li>
	<li><a href="search.php">search</a></li> -->

 	<li><a href ="caretaker.php">home</a></li>
	<li><a href="register.php">Register</a></li>
	<li><a href="delete.php">Evacuate</a></li>
	<!-- <li><a href="caresearch.php">Search</a></li> -->
	<li><form method = "GET" action = "searchc1.php" >


<input type = "text" name = "search" placeholder="House No" />
<input type = "submit" name = "submit" name = "search database" value="Search"  />
</form></li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<li class="logout"><a href='logout.php'>Logout</a></li>

<li>
	<?php include "sessions.php"  ?>
</li>

</nav>
</div>

</header>
<body>


</body>
</html>