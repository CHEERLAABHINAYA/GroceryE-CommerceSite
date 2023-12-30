<?php
	session_start();
	$_SESSION['login_status']=false;
	$username=$_POST['username'];
	$userpasswd=$_POST['passwd'];
	$login_cipher_text=md5($userpasswd);
	include "connection.php";
	$query="select * from user where username='$username' and password='$login_cipher_text';";
	$result=mysqli_query($connection,$query);
	$row_count=mysqli_num_rows($result);
	if($row_count==0)
	{
		echo "invalid credentials";
	}
	else
	{
		$row=mysqli_fetch_assoc($result);
		print_r($row);
		$_SESSION['login_status']=true;
		$_SESSION['userid']=$row['userid'];
		$_SESSION['usertype']=$row['usertype'];
		$_SESSION['username']=$row['username'];
		if($row['usertype']=="customer")
		{
			header("location:cus_view_items.php");
		}
		else if($row['usertype']=="vendor")
		{
			header("location:add_item.php");
		}
	}
?>
		
