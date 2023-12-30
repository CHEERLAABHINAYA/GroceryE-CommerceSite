<?php
	include "vendor_authgaurd.php";
	
	$userid=$_SESSION['userid'];
	//print_r($_POST);
	//print_r($_FILES);
	$file_name=$_FILES['img']['name'];
	$file_path="images/".$file_name;

       
        move_uploaded_file($_FILES['img']['tmp_name'],$file_path);
        // echo "ITEM UPLOADED SUCCESSFULLY";
            
	$iname=$_POST['iname'];
	$iqty=$_POST['iqty'];
	$iprice=$_POST['iprice'];
	$icategory=$_POST['icategory'];
	$idetail=$_POST['idetail'];
	include "connection.php";
	$status=mysqli_query($connection,"insert into item (item_name,quantity,price,category,detail,img_path,uploaded_by) values('$iname','$iqty','$iprice','$icategory','$idetail','$file_path',$userid);");
	if($status)
	{
		echo "Item Uploaded Successfully!";
		header("location:view_items.php");
	}
	else
	{
		echo "Failed to Upload Item!<br>";
		echo mysqli_error($connection);
	}
?>
