<?php include 'sessions.php';
session_start();

if(!isset($_SESSION['id'])){

	echo "Access Denied";
}else{ ?>


<html>

<head><link rel="stylesheet" type="text/css" href="settings.css">
<title>Register Tenants Jancid</title>
<style>
	
	body{
		background:#A6A6A6;
	}

	.wrap{width: 450px;
		height: 690px;
		margin:auto;
		background: linear-gradient(rgba(3,39,80,.4), rgba(3,39,80,.4));
		margin-top: 50px;
		padding: 5px;
		position: relative;
	}
	form{
		padding: 10px;
		width: 350px;
		height: 500px;
		font-family: arial;
		border: 1px;
		position: absolute;
		top: 5px;
		transform: translateY(-8%);
		padding-top: 40px;
	}

	h2 {
		text-align: center;
		width: 350px;
		background: dodgerblue;
		margin:auto;
		padding: 10px;
		border-radius: 10px;

	}

	input{
		padding: 7px;
		margin: 5px;
		border-radius: 2px;
		border: none; 
	}
	input[type=text], input[type= number], input[type= file]{
		width: 90%;
		padding: 14px;
		font-size: 15px;
		border-radius: 5px;
	}

	input[type=file]{
		display: none;
	}

	input[type=submit]{
	
	width: 95%;
	background: dodgerblue;
	cursor: pointer;
	font-size: 18px;
	font-weight: bold;
	color: white;

	}

	label{

		background: dodgerblue;
		padding: 10px 10px;
		display: block;
		margin: 10px auto;
		width: 200px;
		color: #fff;
		text-align: center;

	}



	input[type=submit]:hover{
		
		background: #033750;

	}

	select{

		padding: 10px;
		width: 32%;
		border-radius: 5px;
	}


</style>
</head>





<body>
	<div class= "wrap">
		<h2>Sign up Tenant</h2> 


<form ENCTYPE="multipart/form-data" method = "post" action = "teninsert.php" />


<input type ="text" name = "name" placeholder="Name" maxlength = "30"/><br/><br>
<input type ="text" name = "id" placeholder="National ID" maxlength = "20"/><br/><br>
 <input type ="text" name = "phone" placeholder="Phone No" maxlength = "20"/><br/>
 <br/>
 <!-- <input type ="text" name = "occupation" placeholder="Occupation" maxlength = "20"/><br/><br> -->

<input type ="text" name = "room" placeholder="Room No" maxlength = "20"/> <br/><br>
 <input type ="text" name = "relative" placeholder="Next of kin" maxlength = "20"/> <br/><br>
<input type ="text" name = "relphone" placeholder="Relative Phone" maxlength = "20"/><br/><br>

<input type ="text" name = "previous" placeholder="Previous Home" maxlength = "20"/><br/><br>

<div class="area">
<textarea name="comment" placeholder="comment tenant behaviour"></textarea><br><br>
</div>


<!-- <input type="hidden" name="MAX_FILE_SIZE" size="100000"/> -->



<p><strong id="ter">Please choose a profile picture</strong><p>
<p>
	<label for="file">Upload</label>
<input type="file" id="file" name="upload">
</p>

<p>


<input type = "submit" name = "submit" value = "Register" />

<p>

<!-- <?php# include ("links.php"); ?> -->
 

</form>
</div>
</body>
</html> 

<?php } ?>