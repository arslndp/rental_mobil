<?php 


/* ---------------------------------------------------- */
	define('BASEPATH', 'system/');
/* ---------------------------------------------------- */


/* ---------------------------------------------------- */

	require 'system/lib/lib.env.php';

	require 'system/action/action.akun.php';

	require 'system/action/action.karyawan.php';

	require 'system/action/action.sopir.php';

	require 'system/action/action.pelanggan.php';

	require 'system/db/db.config.php';

/* ---------------------------------------------------- */
if( ! empty($_GET['action']))
{

	include __action__.'action.'.$_GET['action'].'.php';
 	
}
else{

	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>:: Login rental Mobil ::</title>
		<link rel="stylesheet" type="text/css" href="<?php echo __rs_css__ ?>bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo __rs_css__ ?>bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo __rs_css__ ?>login.css">
	</head>
	<body>
	<div class="col-md-12" style="margin-top: 20px;">
		<div class="col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
				Login
				</div>
				<div class="panel-body">
					<form method="POST" action="login.php?action=login">
						<table class="table ">
							<tr>
								<td>username </td>
								<td> : <input type="text" name="username" required="required"></td>
							</tr>
							<tr>
								<td>Password</td>
								<td> : <input type="Password" name="password" required="required"></td>
							</tr>
							<tr>
								<td></td>
								<td class="regist-tip">Belum Punya akun? <a href="register.php">daftar</a></td>
							</tr>
							<tr>
								<td></td>
								<td><input type="Submit" class="btn btn-primary" value="Login!"></td>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Your Detected as
				</div>
				<div class="panel-body">
					<table class="table info-sign">
						<tr>
							<td>User Agent</td>
							<td><?php echo $_SERVER['HTTP_USER_AGENT'] ?></td>
						</tr>
						<tr>
							<td>Server</td>
							<td><?php echo $_SERVER['SERVER_SOFTWARE'] ?></td>
						</tr>
						<tr>
							<td>Port</td>
							<td><?php echo $_SERVER['SERVER_PORT'] ?></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="panel-heading">
			
		</div>
		<div class="panel-body">
			
		</div>
	</div>
	</body>
	</html>		
<?php

}

?>