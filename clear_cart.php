<?php
	include "customer_authgaurd";
	include "customer_home.html";
	include "connection.php";
	$result=mysqli_query($connection,"delete from cart;");
	if($result)
	{
		echo "<div class=text-center><h3>cart is empty!</h3></div>";
	}
	else
	{
		mysqli_error($connection);
	}
?>
	
