<?php 
	$fetch = new karyawan($db);
	$fS = $fetch -> fetch();
?>
<div class="shadow"></div>
<div class="col-md-12" id="popup">
	<div class="col-md-8 panel-tengah">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Tambah Data Karyawan
			</div>
			<div class="panel-body">
				<form method="POST" action="index.php?action=TambahKaryawan">
				<table class="table info-sign">
					<tr>
						<td>Nama Sopir</td>
						<td><input type="text" class="form-control" required="" name="nama"></td>
					</tr>
					<tr>
						<td>Alamat Sopir</td>
						<td><input type="text" class="form-control" required="" name="alamat"></td>
					</tr>
					<tr>
						<td>Telp Sopir</td>
						<td><input type="text" class="form-control" required="" name="telp"></td>
					</tr>
					<tr>
						<td>username </td>
						<td><input type="text" class="form-control" required="required" name="username"></td>
					</tr>
					<tr>
						<td>password</td>
						<td><input type="password" class="form-control" required="required" name="password"></td>
					</tr>
					<tr>
						<td>Type user</td>
						<td><input type="text" class="form-control" placeholder="1 - 3" name="type"></td>
					</tr>
					<tr>
						<td><a class="btn btn-danger" onclick="closePoup()">Batal</a></td>
						<td><input type="submit" class="btn btn-success" value="Tambah" name=""></td>
					</tr>
				</table>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="col-md-12" id="popupEdit">
	<div class="col-md-8 panel-tengah">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Edit Karyawan
			</div>
			<div class="panel-body">
			<form method="POST" action="index.php?action=EditKaryawan">
				<table class="table info-sign">
						<input type="text" id="e_id" name="id" hidden="hidden">
					<tr>
						<td>Nama Karyawan</td>
						<td><input type="text" class="form-control" id="e_nama" name="nama"></td>
					</tr>
					<tr>
						<td>Alamat Karyawan</td>
						<td><input type="text" class="form-control" id="e_alamat" name="alamat"></td>
					</tr>
					<tr>
						<td>Telp Karyawan</td>
						<td><input type="text" class="form-control" id="e_telp" name="telp"></td>
					</tr>
					<tr>
						<td>username </td>
						<td><input type="text" class="form-control" required="required" id="e_user" name="username"></td>
					</tr>
					<tr>
						<td>password</td>
						<td><input type="password" class="form-control" required="required" id="e_pass" name="password"></td>
					</tr>
					<tr>
						<td>Type user</td>
						<td><input type="text" class="form-control" placeholder="1 - 3" id="e_type" name="type"></td>
					</tr>
					<tr>
						<td><a class="btn btn-danger" onclick="closePoup()">Batal</a></td>
						<td><input type='SUBMIT' class="btn btn-success" value="Edit!"></td>
					</tr>
				</table>
			</form>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
	<div class="col-md-12 data-sopir-view">
		<div class="col-md-2">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Action
				</div>
				<div class="panel-body">
						<tr>
							<td><button class="btn btn-block btn-primary" onclick="popupView()">Tambah</button></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div class="col-md-10">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Data Karyawan
				</div>
				<div class="panel-body">
					<table class="table">
						<thead>
							<td>IDSopir</td>
							<td>Nama Sopir</td>
							<td>Alamat Sopir</td>
							<td>Telp Sopir</td>
							<td>action</td>
						</thead>
						<tbody>
							<?php foreach($fS as $data){ ?>
							<tr>
								<td><?php echo $data['nik']  ?></td>
								<td><?php echo $data['NmKaryawan']  ?></td>
								<td><?php echo $data['AlmtKaryawan']  ?></td>
								<td><?php echo $data['TelpKaryawan']  ?></td>
								<td><a href="index.php?action=HapusKaryawan&i=<?php echo base64_encode($data['nik']) ?>"><button class="btn btn-danger">del</button></a> <button class="btn btn-warning" onclick="EditKaryawan('<?php echo $data['nik']?>','<?php echo $data['NmKaryawan']?>','<?php echo $data['AlmtKaryawan']?>','<?php echo $data['TelpKaryawan'] ?>','<?php echo $data['username'] ?>','<?php echo $data['TypeUser'] ?>')">updt</button></td>
							</tr>
							<?php }?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>