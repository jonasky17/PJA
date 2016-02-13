<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
		<link href="dist/css/vendor/bootstrap.min.css" rel="stylesheet">
    <!-- Loading Flat UI -->
    <link href="dist/css/flat-ui.min.css" rel="stylesheet">
    <link href="dist/css/style.css" rel="stylesheet">
    <link href="docs/assets/css/demo.css" rel="stylesheet">
		<script type='text/javascript' src="<?php echo base_url(); ?>js/jquery.min.js"></script>
		<title>header</title>
	</head>
	<link rel="stylesheet" href="<?php echo base_url("css/bootstrap.css"); ?>" />
	<body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="home">Welcome <?php echo $username; ?>!</a>
				</div>
				<ul class="nav navbar-nav">
					<li class="active"><a href="home"><span class="glyphicon glyphicon-home"></span> Unit Management</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-book"></span> Reservation</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-calendar"></span> Time Table</a></li>
					<li><a href="#"><span class="incomeBtn"></span> Income</a></li>
					<li><a href="inventory">Inventory</a></li>
					<li><a href="#">Guest Information</a></li>
					<li><a href="#">Agent</a></li>
					<li><a href="home/logout"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
				</ul>
			</div>
		</nav>