<?php
	$connection=mysqli_connect("localhost","root","","GROCERY_WEBSITE");
	//echo "connection established";
	if($connection->connect_error)
	{
		echo "Connection Failed!,Aborting Execution";
		die;
	}
?>
