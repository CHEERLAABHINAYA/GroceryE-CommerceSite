<!DOCTYPE html>
<head>
<title>view items</title>
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
	
	include "connection.php";
	$result=mysqli_query($connection,"select * from item ;");
	echo "<div class='d-flex flex-wrap'>";
	while($row=mysqli_fetch_assoc($result))
	{
		$iid=$row['item_id'];
		$iname=$row['item_name'];
		$iqty=$row['quantity'];
		$iprice=$row['price'];
		$icategory=$row['category'];
		$idetail=$row['detail'];
		$imgpath=$row['img_path'];
		echo "<div class='card' style='width:20rem;'>
			<img class='img' src='$imgpath' class='card-img-top' alt='image'>
			<div class='card-body'>
				<h5 class='card-title'>$iname</h5>
				<h5 class='card-title'>$iqty</h5>
				<h5 class='card-title text-danger'>$iprice Rs</h5>
				<h5 class='card-title'>$icategory</h5>
				<p class='card-text'>$idetail</p>
				<a href='add_cart.php?iid=$iid&iprice=$iprice' class='btn btn-danger'>Add to Cart</a>
			</div>
			</div>";
	}
	echo "</div>";
?>	
