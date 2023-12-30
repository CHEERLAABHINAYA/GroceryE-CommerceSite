<!DOCTYPE html>
<head>
<title>view orders</title>
<style>
	.card-text
	{
		height:40px;
		overflow:hidden;
	}
	.img
	{
		width:19rem;
		height:16rem;
	}
</style>
</head>
<body>

</body>
</html>


<?php
	include "customer_authgaurd.php";
	include "customer_home.html";
	$userid=$_SESSION['userid'];
	include "connection.php";
	$total=0;
	$result=mysqli_query($connection,"select * from orders;");
	
	echo "<div class='d-flex flex-wrap'>";
	while($row=mysqli_fetch_assoc($result))
	{
		
		$cid=$row['cart_id'];
		$uid=$row['userid'];
		$iid=$row['item_id'];
		$iname=$row['item_name'];
		$iqty=$row['quantity'];
		$iprice=$row['price'];
		$icategory=$row['category'];
		$idetail=$row['detail'];
		$uploadby=$row['uploaded_by'];
		$imgpath=$row['img_path'];
		$total=$total+$iprice;
		
		
		echo "<div class='card' style='width:20rem;'>
			<img class='img' src='$imgpath' class='card-img-top' alt='image'>
			<div class='card-body'>
				<h5 class='card-title'>$iname</h5>
				<h5 class='card-title'>$iqty</h5>
				<h5 class='card-title text-danger'>$iprice Rs</h5>
				<h5 class='card-title'>$icategory</h5>
				<p class='card-text'>$idetail</p>
				
			</div>
			</div>";
	
		
	} 
	echo "</div>";
	echo "<div class='place-order gap-3 p-3 bg-warning w-25'>
		<div  class='display-6 text-white' >Total Amount : Rs.$total</div><br>
		<a href='clear_cart.php'><button class='btn btn-success'>Clear cart</button></a>
	</div>";
?>
