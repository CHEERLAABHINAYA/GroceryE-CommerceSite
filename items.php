<?php
	include "vendor_authgaurd.php";
	
	$userid=$_SESSION['userid'];
	//print_r($_POST);
	//print_r($_FILES);
	$file_name=$_FILES['img']['name'];
	$file_path="images/".$file_name;

       $iid=$_GET['iid'];
        move_uploaded_file($_FILES['img']['tmp_name'],$file_path);
        // echo "ITEM UPLOADED SUCCESSFULLY";
        $iid=$_POST['iid'];    
	$iname=$_POST['iname'];
	$iqty=$_POST['iqty'];
	$iprice=$_POST['iprice'];
	$icategory=$_POST['icategory'];
	$idetail=$_POST['idetail'];
	include "connection.php";
	
	$status=mysqli_query($connection,"update item set item_name='$iname',quantity='$iqty',price='$iprice',category='$icategory',detail='$idetail',img_path='$file_path',uploaded_by=$userid where item_id=$iid;");
	if($status)
	{
		echo "Item Uploaded Successfully!";
		//header("location:view_items.php");
	}
	else
	{
		echo "Failed to Upload Item!<br>";
		echo mysqli_error($connection);
	}
?>
