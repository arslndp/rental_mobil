<?php 
	$fetch = new pelanggan($db);
	$fS = $fetch -> fetch();

	$k = new mobil($db);
	$lK = $k -> fetch();

	$x = new sopir($db);
	$lS = $x -> fetch();

	$p = base64_decode($_GET['p']);
?>
<div class="shadow"></div>
<div class="col-md-12" id="popup" style="margin-top: 0px;position: absolute;">
	<div class="col-md-8 panel-tengah">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Tambah Data Pelanggan
			</div>
			<div class="panel-body">
				<form method="POST" action="index.php?action=TambahPelanggan">
				<table class="table info-sign">
					<tr>
						<td>No Ktp</td>
						<td><input type="text" class="form-control" required="" name="ktp"></td>
					</tr>
					<tr>
						<td>Nama Pelanggan</td>
						<td><input type="text" class="form-control" required="" name="nama"></td>
					</tr>
					<tr>
						<td>Alamat Pelanggan</td>
						<td><input type="text" class="form-control" required="" name="almt"></td>
					</tr>
					<tr>
						<td>Telp Pelanggan</td>
						<td><input type="text" class="form-control" required="" name="telp"></td>
					</tr>
					<tr>
						<td><h4>Data Kendaran</h4></td>
					</tr>
					<tr>
						<td>No Plat</td>
						<td>
							<select class="form-control" name="npt">
								<option value="<?php echo $p ?>"><?php echo $p ?></option>
							<?php foreach ($lK as $data) { ?>
								<option value="<?php echo $data['NoPlat'] ?>"><?php echo $data['NoPlat'] ?></option>
								<?php }?>
							</select>
						</td>
					</tr>
					<tr>
						<td><h4>Data Sopir</h4></td>
						<td>
							<select class="form-control" name="ids"><?php foreach ($lS as $data) { ?>
								<option value="<?php echo $data['IDSopir'] ?>"><?php echo $data['NmSopir'] ?></option>
								<?php }?>
							</select>
						</td>
					</tr>
					<tr>
						<td><h4>Data Sewa Mobil</h4></td>
						<td></td>
					</tr>
					<tr>
						<td>Tanggal Pinjam</td>
						<td>
							<select class="form-control" name="tpi">
								<?php for ($i=01; $i < '32' ; $i++) { 
									echo "<option value='".$i."'>".$i."</option>";
								} ?>
							</select>
						</td>
						<td>
							<select class="form-control" name="bpi">
								<option value="01">Januari</option>
								<option value="02">Februari</option>
								<option value="03">Maret</option>
								<option value="04">April</option>
								<option value="05">Mei</option>
								<option value="06">Juni</option>
								<option value="07">Juli</option>
								<option value="08">Agustus</option>
								<option value="09">September</option>
								<option value="10">Oktober</option>
								<option value="11">November</option>
								<option value="12">Desember</option>
							</select>
						</td>
						<td>
							<select class="form-control" name="thpi"><?php for ($i=1999; $i <= date('Y') ; $i++) { ?>
								<option value="<?php echo $i ?>"><?php echo $i ?></option>
								<?php }?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Jam Pinjam</td>
						<td><input type="text" placeholder="00:00" class="form-control" name="jpi"></td>
					</tr>
					<tr>
						<td>Tanggal Rencana Kembali</td>
						<td>
							<select class="form-control" name="tgrk">
								<?php for ($i=01; $i < '32' ; $i++) { 
									echo "<option value='".$i."'>".$i."</option>";
								} ?>
							</select>
						</td>
						<td>
							<select class="form-control" name="brk">
								<option value="01">Januari</option>
								<option value="02">Februari</option>
								<option value="03">Maret</option>
								<option value="04">April</option>
								<option value="05">Mei</option>
								<option value="06">Juni</option>
								<option value="07">Juli</option>
								<option value="08">Agustus</option>
								<option value="09">September</option>
								<option value="10">Oktober</option>
								<option value="11">November</option>
								<option value="12">Desember</option>
							</select>
						</td>
						<td>
							<select class="form-control" name="thrk"><?php for ($i=1999; $i <= date('Y') ; $i++) { ?>
								<option value="<?php echo $i ?>"><?php echo $i ?></option>
								<?php }?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Jam Kembali Rencana</td>
						<td><input type="text" class="form-control" placeholder="00:00" name="jkr"></td>
					</tr>
					<tr>
						<td>Kilo Meter Pinjam</td>
						<td><input type="text" class="form-control" name="kmpi"></td>
					</tr>
					<tr>
						<td>BBM Pinjam</td>
						<td><input type="text" class="form-control" name="bbmpi"></td>
					</tr>
					<tr>
						<td>Kondisi Mobil Pinjam</td>
						<td><input type="text" class="form-control" name="kompi"></td>
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
				Edit Pelanggan
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
					Data pelanggan
				</div>
				<div class="panel-body">
					<table class="table">
						<thead>
							<td>No Ktp</td>
							<td>Nama pelanggan</td>
							<td>Alamat pelanggan</td>
							<td>Telp pelanggan</td>
							<td>action</td>
						</thead>
						<tbody>
							<?php foreach($fS as $data){ ?>
							<tr>
								<td><?php echo $data['NoKtp']  ?></td>
								<td><?php echo $data['NamaPel']  ?></td>
								<td><?php echo $data['AlamatPel']  ?></td>
								<td><?php echo $data['TelpPel']  ?></td>
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