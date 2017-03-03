<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<<!-- Latest compiled and minified CSS & JS -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
		<script src="//code.jquery.com/jquery.js"></script>
		<script src="<?php echo base_url();?>assets/css/bootstrap.min.css"></script>
	</head>
	<body>

		<div class="container">
		<div class="rows">
			<div class="col-x5-12 col-sn-12 col-nd-12 col-lg-12">

				<nav class="navbar navbar-default" role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					<a class="navbar-brand" href="<?php echo site_url()?>/home">K-Drama</a>
					</div>
			
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li class="active"><a href="<?php echo site_url()?>/home">Home</a></li>
							<li><a href="<?php echo site_url()?>/about">About</a></li>
							<li><a href="<?php echo site_url()?>/contact">Contact</a></li>
							<form class="navbar-form navbar-left" role="search">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search">
							</div>
							<button type="submit" class="btn btn-default">Submit</button>
						</form>

						</ul>
						
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Qotrunnada Widadu Izdihar <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">Profile</a></li>
									<li><a href="#">Setting</a></li>
									<li><a href="#">Logout</a></li>
								
							</li>
						</ul>
					</div>
				</nav>

				
				<div class="jumbotron">
					<div class="container">
							
		<h1><?php echo $nama ?></h1> 
		
		<form class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-sm-1" for="nama">Nama : </label>
				<div class="col-sm-10">
					<input type="text" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-1" for="alamat">Email : </label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="alamat">
				</div>
			</div>		
			<div class="form-group">
				<label class="control-label col-sm-1" for="nama"> Pesan : </label>
				<div class="col-sm-10">
					<input type="text" class="form-control">
				</div>
			</div>
			<button type="submit" class="btn btn-danger">Submit</button>
		</form>		
	</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		<script src="//code.jquery.com/jquery.js"></script>
		<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
	</body>
	</html>