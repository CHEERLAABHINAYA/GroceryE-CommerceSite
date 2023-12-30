<?php
	include "connection.php";
	$username=$_POST['username'];
	$userpassword=$_POST['passwd1'];
	$cipher_text=md5($userpassword);
	$query="insert into user(username,password,usertype) values('$username','$cipher_text','customer');";
	$status=mysqli_query($connection,$query);
	if($status)
	{
		echo "<br>Registration successfully completed";
	}
	else
	{
		echo"Registration Failed!<br>";
		echo mysqli_error($connection);
	}
?>
