<?php
	include "vendor_authgaurd.php";
?>
<html>
<head>
<title>vendor home page</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-success justify-content-center navbar-dark navbar-text-md sticky-top">
<div class="container-fluid">
<h3 class="navbar-brand-md"><img src="bg4.jpg" width="60" height="60" class="rounded-pill"><b>GROCERY</b></h3>
<ul class="navbar-nav">

<li class="nav-item">
<a class="nav-link" href="add_item.php"><h4>Upload Item</h4></a>
</li>
<li class="nav-item">
<a class="nav-link" href="view_items.php"><h4>View Items</h4></a>
</li>


<li class="nav-item">
<a class="nav-link" href="vendor_view_orders.php"><h4>View Orders</h4></a>
</li>
<li class="nav-item">
<a class="nav-link" href="vendor_logout.php"><h4>logout</h4></a>
</li>
</ul>
</div>
</nav>
</body>
</html>
