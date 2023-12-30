<?php 
	include "vendor_home.html";
	
?>


<html>
<head>
<title>edit item</title>

</head>
<body>
<div class="d-flex justify-content-center align-items-center vh-100">
<form action="items.php" enctype="multipart/form-data" method="POST">
<label>Item ID:</label>
<input type="text" name="iid" class="form-control mt-2" value="<?php echo $_GET['iid']?>">
<label>Item Name:</label>
<input type="text" name="iname" class="form-control mt-2" value="<?php echo $_GET['iname']?>">
<label>Quantity:</label>
<input type="text" name="iqty" class="form-control mt-2" value="<?php echo $_GET['iqty']?>">
<label>Price:</label>
<input type="number" name="iprice" class="form-control mt-2" value="<?php echo $_GET['iprice']?>">
<label>Category:</label>
<select name="icategory" class="form-control mt-2" >
	<option value="">---Select Category</option>
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
<label>Detail:</label>
<input class="form-control mt-2" name="idetail" value="<?php echo $_GET['idetail']?>">
<label>Image Path:</label>
<input type="file" accept=".jpg" name="img" class="form-control mt-2" >
<div class="text-center">
<button type="submit" class="mt-4 btn btn-warning">Edit</button>
</div>
</form>
</div>
</body>
</html>

