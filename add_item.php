<?php
	include "vendor_authguard.php";
	include "vendor_home.html";
?>
<!DOCTYPE html>
<html>
<head>
<title>add items</title>
<style>
	.auth-parent
	{
		display:flex;
		justify-content:space-around;
	}
</style>
</head>

<body style="background-color:lightyellow;">
<div class="d-flex justify-content-center align-items-center vh-100">
<form action="upload.php" enctype="multipart/form-data" method="POST">
<input type="text" name="iname" class="form-control mt-3" required placeholder="Item Name">
<input type="text" name="iqty" class="form-control mt-3" required placeholder="Item Quantity">
<input type="number" name="iprice" class="form-control mt-3" required placeholder="Item Price">
<select name="icategory" class="form-control mt-3">
	<option value="">---Select Category---</option>
	<option value="Fruits">Fruits</option>
	<option value="Vegetables">Vegetables</option>
	<option value="Frozen_Foods">Frozen_Foods</option>
	<option value="Meat">Meat</option>
	<option value="Condiments_and_Spices">Condiments_and_Spices</option>
	<option value="Snacks">Snacks</option>
	<option value="Dairy_Products">Dairy_Products</option>
	<option value="Cereal">Cereal</option>
	<option value="Household_Supplies">Household_Supplies</option>
	<option value="Baby_Items">Baby_Items</option>
</select>
<textarea required class="form-control mt-2" name="idetail" cols="30" rows="5"></textarea>
<input type="file" accept=".jpg" name="img" class="form-control mt-3" required>
<div class="text-center">
<button type="submit" class="mt-4 btn btn-warning">Upload Item</button>
</div>
</form>
</div>
</body>
</html>

