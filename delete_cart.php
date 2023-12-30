<?php
	$cartid=$_GET['cartid'];
	include "connection.php";
	
	$status=mysqli_query($connection,"delete from cart where cart_id='$cartid';");
	
	if($status)
	{
		//echo "Item removed from Cart successfully!");
		header("location:view_cart.php");
	}
	else
	{
		echo "Error in removing the cart!";
		echo mysqli_error($connection);
	}
?>
