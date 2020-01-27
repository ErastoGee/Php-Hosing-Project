<html>

<head>
	<link rel="stylesheet" type="text/css" href="Navbar.css">
	<!-- <script src="sweetalert2.min.js"></script> -->
<link rel="stylesheet" href="sweetalert2.min.css">
<title> Jancid Register Visitor</title>

<style> body{
		background:#A6A6A6;
	}

	.wrap{width: 450px;
		height: 550px;
		margin:auto;
		background: linear-gradient(rgba(3,39,80,.4), rgba(3,39,80,.4));
		margin-top: 50px;
		padding: 5px;
		position: relative;
		border-radius: 10px;
	}
	form{

		padding: 50px;
		width: 350px;
		height: 350px;
		font-family: arial;
		border: 1px;
		position: absolute;
		top: 5px;
		transform: translateY(-1%);
		padding-top: 100px;
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
	input[type=text], input[type= number], input[type= file]{
		width: 90%;
		padding: 12px;
		font-size: 15px;
		border-radius: 5px;
	}

	input[type=submit]{
	
	width: 95%;
	background: dodgerblue;
	cursor: pointer;
	font-size: 18px;
	font-weight: bold;
	color: white;

	}



	input[type=submit]:hover{
		
		background: #033750;

	}

	select{

		padding: 10px;
		width: 32%;
		border-radius: 5px;
	}</style>

</head>

<body>
	<div class ="wrap">
		<h2>Record Visitor</h2>

<form onsubmit="return required()" ENCTYPE="multipart/form-data" method = "post" action = "regvisit.php" />
<center>

<input type ="text" name = "name" placeholder="name" maxlength = "30" id="name" />
<span id="message" style="color: red;"></span><br>

<input type ="text" name = "id" placeholder="National ID" maxlength = "20" id="natid" /> 
<span id="messages" style="color: red;"></span><br>

<input type ="text" name = "room" placeholder="Room No" maxlength = "20" id="room" /> 
<span id="messages" style="color: red;"></span><br>

<input type ="text" name = "phone" placeholder="Phone No" maxlength = "20" id="phone" />
<span id="messages" style="color: red;"></span><br>

<input type ="text" name = "relationship" placeholder="Relationship" maxlength = "20" id="relationship" /> 
<span id="messages" style="color: red;" ></span><br>

<input type ="text" name = "duration" placeholder="Duration" maxlength = "20" id="duration" />
<span id="messages" style="color: red;"></span><br>

</center>


<p>
<center><strong>

<input type = "submit" name = "submit" value = "Register" />
</strong></center>

<p>

<!-- <?php# include ("links.php"); ?> -->
 

</form>
</div>
<?php

if (isset($_POST['submit'])) {



$name = $_POST ['name'];

$id= $_POST['id'];

$room = $_POST['room'];

$phone = $_POST['phone'];

$relationship= $_POST['relationship'];

$duration = $_POST['duration'];
?>

<script>
    function required(){
        var a = document.getElementById("name").value;
        var b = document.getElementById("natid").value;
        var c = document.getElementById("room").value;
        var d = document.getElementById("phone").value;
        var e = document.getElementById("relationship").value;
        var f = document.getElementById("duration").value;

        if(a==""){
            document.getElementById ("message").innerHTML="** required"
            return false;
        }
        if(b==""){
            document.getElementById ("messages").innerHTML="** required"
            return false;
        }

        // if(b.length<10){
        //     document.getElementById ("message").innerHTML="** please enter 10 digits"
        //     return false;
        // }
        // if(b.length>10){
        //     document.getElementById ("message").innerHTML="** please enter 10 digits"
        //     return false;
        // }


        if(c==""){
            document.getElementById ("messagess").innerHTML="** required"
            return false;
        }
        if(isNaN(c)){
            document.getElementById ("message").innerHTML="** please enter correct mobile number"
            return false;
        }

        if(isNaN(d)){
            document.getElementById ("message").innerHTML="** please enter correct mobile number"
            return false;
        }

        if(d.length<10){
            document.getElementById ("message").innerHTML="** please enter 10 digits"
            return false;
        }
        if(d.length>10){
            document.getElementById ("message").innerHTML="** please enter 10 digits"
            return false;
        }

        if(isNaN(e)){
            document.getElementById ("message").innerHTML="** relationship cannot be a number"
            return false;
        }

        if(e==""){
            document.getElementById ("message").innerHTML="** required"
            return false;
        }

        if(f==""){
            document.getElementById ("message").innerHTML="** required"
            return false;
        }
    }
</script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="sweetalert2.all.min.js"></script>
Optional: include a polyfill for ES6 Promises for IE11 and Android browser
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script> -->

<?php

$con= mysqli_connect("localhost", "root", "") or die ("we couldnt connect!");

	mysqli_select_db($con, "jancid");

	$rid = mysqli_query ($con, "SELECT id FROM visitors WHERE id = '$id'");
	$checkid = mysqli_num_rows ($rid);


if ($checkid !=0){

	echo "<center>";

	// include ('links.php');

	echo "That id already exists";
	echo "</center>";
	// header("Refresh:10; url=regvisit.php");


}else{	
	



		

mysqli_query ($con, "INSERT INTO visitors (name, id, room, duration, phone, relationship) values ('$name', '$id', '$room', '$duration', '$phone', '$relationship')");

$registered = mysqli_affected_rows($con);


mysqli_close($con);
echo "You have been registered successfully";

// include "home.php";

header("Refresh:3; url=regvisit.php");
}
}
?>

</body>
</html> 