


<?php
	include "customer_authgaurd.php";
	
	$userid=$_SESSION['userid'];
	include "connection.php";
	
	$result=mysqli_query($connection,"select * from cart join item on cart.item_id=item.item_id where userid='$userid';");
	
	
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
		$status=mysqli_query($connection,"insert into orders(userid,item_id,item_name,quantity,price,category,detail,uploaded_by,img_path) values($uid,$iid,'$iname','$iqty',$iprice,'$icategory','$idetail',$uploadby,'$imgpath');");
		if($status)
		{
			header("location:view_orders.php");
		}
		
	} 
	
?>
