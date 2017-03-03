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

				
				
					<div class="container">
						<h1>About</h1>
						<table width="40%" align="left" cellspacing="1" cellpadding="5">
						<tr>
							<td>Nama</td>
							<td>&nbsp:&nbsp </td>
							<td><?php echo $nama; ?></td>
						</tr>
						<tr>
							<td>NIM</td>
							<td>&nbsp:&nbsp </td>
							<td><?php echo $nim; ?></td>
						</tr>
						<tr>
							<td>Jurusan</td>
							<td>&nbsp:&nbsp </td>
							<td><?php echo $jurusan; ?></td>
						</tr>
						<tr>
							<td>Kelas</td>
							<td>&nbsp:&nbsp </td>
							<td><?php echo $kelas; ?></td>
						</tr>
							<tr><td>Alamat </td>
							<td>&nbsp:&nbsp </td>
							<td> <?php echo $alamat; ?></td>
						</tr>
						<tr>
							<td>TTL </td>
							<td>&nbsp:&nbsp </td>
							<td> <?php echo $ttl; ?></td>
						</tr>
						<tr>
							<td>Hobi</td>
							<td>&nbsp:&nbsp </td>
							<td><?php echo $hobi; ?></td>
						</tr>
						<tr>
							<td>No.Hp</td>
							<td>&nbsp:&nbsp </td>
							<td><?php echo $no_hp; ?></td>
						</tr>
						</table>
						<p>
							
						</p>
					</div>
				</div>
			</div>
		</div>
		</div>
		<script src="//code.jquery.com/jquery.js"></script>
		<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
	</body>
	</html>