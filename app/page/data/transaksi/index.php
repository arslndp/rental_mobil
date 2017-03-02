<?php 
	$fetch = new transaksi($db);
	$fS = $fetch -> fetch();
?>
<div class="shadow"></div>
<div class="col-md-12" id="popup">
	<div class="col-md-8 panel-tengah">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Tambah Data Transaksi
			</div>
			<div class="panel-body">
				<form method="POST" action="index.php?action=TambahMobil">
				<table class="table info-sign">
					<tr>
						<td>No Plat</td>
						<td><input type="text" class="form-control" required="" name="ktp"></td>
					</tr>
					<tr>
						<td>Tahun</td>
						<td><input type="text" class="form-control" required="" name="nama"></td>
					</tr>
					<tr>
						<td>Tarif per Jam</td>
						<td><input type="text" class="form-control" required="" name="almt"></td>
					</tr>
					<tr>
						<td>Status Rental</td>
						<td><input type="text" class="form-control" required="" name="telp"></td>
					</tr>
					<tr>
						<td>Type Mobil</td>
						<td><select name="type">
							<?php foreach ($lT as $data) { ?>
								<option value="<?php echo $data['IDType'] ?>"><?php echo $data['NmType'] ?></option>
							<?php }?>
							</select>
						</td>
					</tr>
					<tr>
						<td><button class="btn btn-danger" onclick="closePoup()">Batal</button></td>
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
				Edit Transaksi
			</div>
			<div class="panel-body">
			<form method="POST" action="index.php?action=EditPelanggan">
				<table class="table info-sign">
						<input type="text" id="e_id" name="id" hidden="hidden">
					<tr>
						<td>Nama Sopir</td>
						<td><input type="text" class="form-control" id="e_nama" required="required" name="nama"></td>
					</tr>
					<tr>
						<td>Alamat Sopir</td>
						<td><input type="text" class="form-control" id="e_alamat" required="required" name="alamat"></td>
					</tr>
					<tr>
						<td>Telp Sopir</td>
						<td><input type="text" class="form-control" id="e_telp" name="telp"></td>
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
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Data Logs Transaksi
				</div>
				<div class="panel-body">
					<table class="table">
						<thead>
							<td>No Transaksi</td>
							<td>No Ktp</td>
							<td>No Plat</td>
							<td>Nama Karyawan</td>
							<td>Nama Sopir</td>
							<td>Telp Sopir</td>
							<td>Tanggal Keluar</td>
							<td>Status Mobil</td>
							<td>Action</td>
						</thead>
						<tbody>
							<?php foreach($fS as $data){ ?>
							<tr>
								<td><?php echo $data['NoTransaksi']  ?></td>
								<td><?php echo $data['NoKtp']  ?></td>
								<td><?php echo $data['NoPlat']  ?></td>
								<td><?php echo $data['NmKaryawan']  ?></td>
								<td><?php echo $data['NmSopir'] ?></td>
								<td><?php echo $data['TelpSopir'] ?></td>
								<td><?php echo $data['TglPinjam'] ?></td>
								<td><?php 
												if ($data['TglKembaliRealisasi'] == date('Y-m-d')) {
													echo "<button class='btn btn-primary'>Available</button>";
												}else{
													echo "<button class='btn btn-warning'>Reserved</button>";
												}

								 ?>
								 </td>
								<td><a href="index.php?action=HapusPelanggan&i=<?php echo base64_encode($data['NoKtp']) ?>"><button class="btn btn-danger">del</button></a> <button class="btn btn-warning" onclick="EditSopir('<?php echo $data['NoKtp']?>','<?php echo $data['NamaPel']?>','<?php echo $data['AlamatPel']?>','<?php echo $data['TelpPel'] ?>')">updt</button></td>
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