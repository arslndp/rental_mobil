<?php 
	$Karyawan = new karyawan($db);
	$cK = $Karyawan -> countKaryawan();

?>
<div class="container home">
	<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Data Activity
			</div>
			<div class="panel-body">
				<div class="col-md-3">
					<div class="panel panel-danger">
						<div class="panel-heading">
							Data Pelanggan
						</div>
						<div class="panel-body">
							<button class="btn btn-danger btn-block"><?php echo $cK ?></button>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="panel panel-danger">
						<div class="panel-heading">
							Data Karyawan
						</div>
						<div class="panel-body">
							<button class="btn btn-danger btn-block"><?php echo $cK ?></button>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="panel panel-danger">
						<div class="panel-heading">
							Data Service
						</div>
						<div class="panel-body">
							<button class="btn btn-danger btn-block"><?php echo $cK ?></button>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="panel panel-danger">
						<div class="panel-heading">
							Data Mobil
						</div>
						<div class="panel-body">
							<button class="btn btn-danger btn-block"><?php echo $cK ?></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Your are loged as <?php echo $_SESSION['AKUN']['username'] ?>
				</div>
				<div class="panel-body">
					<table class="table info-sign">
						<tr>
							<td>nama </td>
							<td><?php echo $_SESSION['AKUN']['NmKaryawan'] ?></td>
						</tr>
						<tr>
							<td>Alamat Karyawan</td>
							<td><?php echo $_SESSION['AKUN']['AlmtKaryawan'] ?></td>
						</tr>
						<tr>
							<td>Telp Karyawan</td>
							<td><?php echo $_SESSION['AKUN']['TelpKaryawan'] ?></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Server Infromation
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
		<div class="panel panel-primary">
			<div class="panel-heading">
				<center>Pencipta RnT Mobil</center>
			</div>
			<div class="panel-body">
				<table class="table info-sign">
					<tr>
						<td>nama</td>
						<td>Muhammad Arsalan Diponegoro</td>
					</tr>
					<tr>
						<td>Kelas</td>
						<td>XII RPL 3</td>
					</tr>
					<tr>
						<td>Sekolah</td>
						<td>SMKN 5 KOTA BEKASI</td>
					</tr>
					<tr>
						<td>No Phone</td>
						<td>089680837605</td>
					</tr>
					<tr>
						<td>Email</td>
						<td>arsalan.dp@gmail.com</td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>Taman Wisma Asri 1 , Blok A4 No 11 , Bekasi Utara , 17121</td>
					</tr>
					<tr>
						<td>Instagram</td>
						<td>@derandra13</td>
					</tr>
					<tr>
						<td>Hoby</td>
						<td>Nonton Film , Futsal , Running , Coding</td>
					</tr>
					<tr>
						<td>Tempat Tanggal Lahir</td>
						<td>12 Juni 1999</td>
					</tr>
					<tr>
						<td>Motto Hidup</td>
						<td>Berani Benar walau hanya sendiri</td>
					</tr>
					<tr>
						<td>Misi</td>
						<td>Menguasai Pasar Teknologi Dunia</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
