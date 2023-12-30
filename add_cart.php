<?php
	include "customer_authgaurd.php";
	$userid=$_SESSION['userid'];
	$iid=$_GET['iid'];
	include "connection.php";
	
	$status=mysqli_query($connection,"insert into cart(userid,item_id) values($userid,'$iid');");
	
	
		//$query1=mysqli_query($connection,"update cart set qty=qty+1 where user_id=$userid and item_id='$iid';");
	if($status)
	{
		echo "Item added to cart successfully!";
		header("location:view_cart.php");
	}
	else
	{
		echo "Unable to add to cart";
		echo mysqli_error($connection);
	}
	
?>
