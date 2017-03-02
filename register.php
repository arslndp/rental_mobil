<?php
/* ---------------------------------------------------- */

	require 'system/var/var.env.php';

	require 'system/action/action.akun.php';

	require 'system/db/db.config.php';

/* ---------------------------------------------------- */
?>
<!DOCTYPE html>
<html>
<head>
	<title>:: registration Form ::</title>
	<link rel="stylesheet" type="text/css" href="<?php echo __rs_css__ ?>register.css">
</head>
<body>
<h1>Regitration Form</h1>
<form method="POST" action="login.php?action=register">
	<table>
		<tr>
			<td>Username </td>
			<td> : <input type="username" name="username" required="required"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td> : <input type="password" name="password" required="required"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td> : <input type="email" name="email" required="required"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td> : <textarea name="alamat" required="required"></textarea></td>
		</tr>
		<tr>
			<td>No Phone</td>
			<td> : <input type="text" name="no" required="required"></td>
		</tr>
		<tr>
			<td>Sudah punya akun? click <a href="login.php">disini</a></td>
			<td> <input type="submit" name="" value="Daftar!" class="btn"></td>
		</tr>
	</table>
</form>
</body>
</html>