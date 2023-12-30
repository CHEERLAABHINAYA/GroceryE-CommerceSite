<?php
	$iid=$_GET['item_id'];
	include "connection.php";
	$status=mysqli_query($connection,"delete from item where item_id=$iid;");
	if($status)
	{
		echo "Item Deleted Successfully!";
		header("location:view_items.php");
	}
	else
	{
		echo "Delete Failed";
		mysqli_error($connection);
	}
?>
