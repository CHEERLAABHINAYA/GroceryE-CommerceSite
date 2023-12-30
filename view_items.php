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
<script>
	function confirmDelete(iid)
	{
		res=confirm("Are you sure want to Delete?");
		if(res)
		{
			window.location=`delete_item.php?item_id=${iid}`;
		}
	}
</script>
</body>
</html>
<?php
	include "vendor_authguard.php";
	include "vendor_home.html";
	$userid=$_SESSION['userid'];
	include "connection.php";
	$result=mysqli_query($connection,"select * from item where uploaded_by=$userid ;");
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
				<a onclick='confirmDelete($iid)' class='btn btn-danger'>Delete Item</a>
				<a href='edit_item.php?iname=$iname&iqty=$iqty&iprice=$iprice&icategory=$icategory&idetail=$idetail&imgpath=$imgpath&iid=$iid' class='btn btn-warning '>Edit Item</a>
			</div>
			</div>";
	}
	echo "</div>";
?>	
