<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>sign up 	</title>
	<link rel="stylesheet" href="sign_l.css">
	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
	
	
	<div class="main">
		<h1>CREATE ACCOUNT</h1>
		
		<div class="input">
			<form method="POST" action="sign.php">
			<table>
				<label>FIRST NAME </label>
				<input type="text" name="firstname" placeholder="First name ">
				<label>LAST NAME  </label>
				<input type="text" name="lastname" placeholder="Last name">
				<label>EMAIL ID</label>
				<input type="email" name="email" class="email" placeholder="Email">
				<label>PASSWORD </label>
				<input type="PASSWORD" name="password" placeholder="password">
				<label>CONCTACT </label>
				<input type="number" name="contact" placeholder="Contact">
				<label>ADDRESS</label>
				<input type="area" name="address" class="address" placeholder="Address">
				<input type="submit" name="submit" values="submit" class="sign-up">		
		    </table>
		</form>
		</div>	
	</div>


</body>
</html>
<?php
if(isset($_POST['submit'])){

	$f=$_POST['firstname'];
	$l=$_POST['lastname'];
	$e=$_POST['email'];
	$p=$_POST['password'];
	$c=$_POST['contact'];
	$a=$_POST['address'];
	$con=mysqli_connect("localhost","root","","cimage");
	$sql="insert into  mydata (firstname,lastname,email,password,contact,address) values ('$f','$l','$e','$p','$c','$a')";
	$res=mysqli_query($con,$sql);
	if($res){
		echo "<script>alert('Data is scuessflly');</script> ";

	}
	else{
		echo "faild connaction";
	}

}
?>

