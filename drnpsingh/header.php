<?php
	//check login
	include("session.php");
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Invoice Manager</title>

	<!-- JS -->
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="js/moment.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.js"></script>
	<script src="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js"></script>
	<script src="js/bootstrap.datetime.js"></script>
	<script src="js/bootstrap.password.js"></script>
	<script src="js/scripts.js"></script>

	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.datetimepicker.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.css">
	<link rel="stylesheet" href="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css">
	<link rel="stylesheet" href="css/styles.css">

	<style>
		@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700);
		body, h1, h2, h3, h4, h5, h6{
			font-family: 'Open Sans', sans-serif;
		}
	</style>

</head>

<body>
	<div class="container">

		
		<div class="top-buttons btn-group">
			<a href="invoice-create.php"><button type="button" class="btn btn-primary"  aria-expanded="false">Create Patient</button></a>
		</div>
		
		<div class="top-buttons btn-group">
			<a href="invoice-list.php"><button type="button" class="btn btn-primary"  aria-expanded="false">Manage Patients</button></a>
		</div>
		
		<div class="top-buttons btn-group">
			<a href="csv.php"><button type="button" class="btn btn-primary"  aria-expanded="false">Download Report</button></a>
		</div>
		

<!--		<div class="top-buttons btn-group">
			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Items <span class="caret"></span></button>
		  	<ul class="dropdown-menu" role="menu">	
		  		<li><a href="product-add.php">Add Item</a></li>	    
				<li><a href="product-list.php">Manage Item</a></li>
		  	</ul>
		</div>

		<div class="top-buttons btn-group">
			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Customers <span class="caret"></span></button>
		  	<ul class="dropdown-menu" role="menu">	
		  		<li><a href="customer-add.php">Add Customer</a></li>	    
				<li><a href="customer-list.php">Manage Customers</a></li>
		  	</ul>
		</div>
-->
		<!--<div class="top-buttons btn-group">
			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Users <span class="caret"></span></button>
		  	<ul class="dropdown-menu" role="menu">	
		  		<li><a href="user-add.php">Add User</a></li>	    
				<li><a href="user-list.php">Manage Users</a></li>
		  	</ul>
		</div>
-->
		<div class="top-buttons float-right btn-group">
			<a class="btn btn-info float-right" href="logout.php" role="button">Logout</a>
		</div>

		<div class="top-buttons btn-group float-right">
			<p class="user">Hey, <?php echo $_SESSION['login_username']; ?></p>
		</div>