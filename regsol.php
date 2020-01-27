<html>

<head><link rel="stylesheet" type="text/css" href="settings.css">
<title>Register Security Personel Jancid</title>
  <style> body{
		background:#A6A6A6;
	}

	.wrap{width: 450px;
		height: 630px;
		margin:auto;
		background: linear-gradient(rgba(3,39,80,.4), rgba(3,39,80,.4));
		margin-top: 50px;
		padding: 5px;
		position: relative;
		border-radius: 10px;
	}
	form{

		padding: 40px auto;
		width: 350px;
		height: 450px;
		font-family: arial;
		border: 1px;
		position: absolute;
		top: 5px;
		transform: translateY(-1%);
		padding-top: 42px;
	}

	h2 {
		text-align: center;
		/*width: 350px;*/
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
	input[type=text], input[type= password], input[type= file]{
		width: 90%;
		padding: 15px;
		font-size: 15px;
		border-radius: 5px;
	}
	 input[type= file]{
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
		/*border:1px solid white;*/
		display: block;
		margin: 10px auto;
		width: 200px;
		/*border-radius: 10px;*/
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
	<div class="wrap">
		<h2>Sign up Jancid Soldier</h2>


<form ENCTYPE="multipart/form-data" method = "post" action = "regslinsert.php" />

<input type ="text" name = "name" placeholder="Name" maxlength = "30"/><br/><br>
<input type ="text" name = "id" placeholder="National ID" maxlength = "20"/><br/><br>
<input type ="text" name = "phone" placeholder="Phone No" maxlength = "20"/> <br/><br> 
<input type ="password" name ="password" placeholder="Password" maxlength = "10"/><br>
</br>
<input type ="password" name ="cpassword" placeholder="Confirm Password" maxlength = "10"/><br>
</br>

<p><strong id="ter">Please choose a picture for your profile</strong><p>
<p>
	<label for="file">Upload</label>
<input type="file" id="file" name="upload">
</p>

<p>


<input type = "submit" name = "submit" value = "Register" />

<p>

<!-- <?php# include ("links.php"); ?> -->
 

</form>
</body>
</html> 