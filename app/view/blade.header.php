<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title> :: Dashboard :: | Rnt_M0b1l </title>
	<link rel="stylesheet" type="text/css" href="<?php echo __rs_css__ ?>bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo __rs_css__ ?>bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo __rs_css__ ?>main.css"/>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="nav navbar-default nav-color" role='navigation'>
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle='collapse' data-target='#navbar-collapse'>
					<span class="sr-only">Toggle Responsive</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand"><img src="<?php echo __rs_img__ ?>logo.png" style='width: 50px;'></a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="index.php?page=data/sopir" class="color-white">Data Sopir</a></li>
					<li><a href="index.php?page=data/karyawan">Data Karyawan</a></li>
					<li><a href="index.php?page=data/pelanggan">Data Pelanggan</a></li>
					<li><a href="">Service</a></li>
					<li><a href="">Pemilik</a></li>
					<li><a href="">Setoran</a></li>
					<li><a href="index.php?page=data/transaksi">Transaksi Sewa</a></li>
					<li><a href="index.php?page=data/mobil">Mobil</a></li>
					<li><a href="index.php?action=logout">Logout</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>