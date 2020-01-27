

<!-- <?php include 'session.php'; ?> -->

<html>

<head>
	<style>
		
	
	body{
		background:#A6A6A6;
	}

	.wrap{width: 650px;
		height: 730px;
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

<head/>
<link rel="stylesheet" type="text/css" href="settings.css">
<body>

	<div class="wrap">


<h2>Update Room: <?php echo $_REQUEST['room']; ?></h2>

<form enctype="muiltypart/data" method = "post" action = "change.php">

<table border = "0" width = "80%">
<tr>
<td width = "30%">Room:</td>

<td>
<input type="text" name="newroom" value="<?php echo $_REQUEST['room']; ?>" 
</td>
</tr>
<tr>
 <td width = "30%">Name:</td>
 <td><input type = "text" name = "newname" value = "<?php echo $_REQUEST['name']; ?>" </td>
 </tr>
<tr>
<td width = "30%">National ID: </td>
<td> <input type = "text" name = "newid" value = "<?php echo $_REQUEST['id']; ?>" </td>
</tr>

<tr>
<td width = "30%">Phone: </td>
<td> <input type = "text" name = "newphone" value = "<?php echo $_REQUEST['phone']; ?>" </td>
</tr>

<tr>
<td width = "30%">Relative: </td>
<td> <input type = "text" name = "newrelative" value = "<?php echo $_REQUEST['relative']; ?>" </td>
</tr>

<tr>
<td width = "30%">Relative Contacts: </td>
<td> <input type = "text" name = "newrelphone" value = "<?php echo $_REQUEST['relphone']; ?>" </td>
</tr>

</table><p>
	<strong>change pictutre:</strong><p>
<label for="file">Upload</label>
<input type="file" id = "file" name="newupload"><p>

<input type = "submit" value = "Save And Update">
<input type = "hidden" name = "id" value = "<?php echo $_REQUEST ['ids']; ?>">

</form>

</div>
</body>
</html>



