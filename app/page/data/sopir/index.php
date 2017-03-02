<?php 
	$fetch = new sopir($db);
	$fS = $fetch -> fetch();
?>
<div class="shadow"></div>
<div class="col-md-12" id="popup">
	<div class="col-md-8 panel-tengah">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Tambah Data Sopir
			</div>
			<div class="panel-body">
				<form method="POST" action="index.php?action=TambahSopir">
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
						<td>No Sim</td>
						<td><input type="text" class="form-control" required="" name="sim"></td>
					</tr>
					<tr>
						<td>Tarif per Jam</td>
						<td><input type="text" class="form-control" required="" name="tarif"></td>
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
				Edit sopir
			</div>
			<div class="panel-body">
			<form method="POST" action="index.php?action=EditSopir">
				<table class="table info-sign">
						<input type="text" id="e_id" name="id" hidden="hidden">
					<tr>
						<td>Nama Sopir</td>
						<td><input type="text" class="form-control" id="e_nama" name="nama"></td>
					</tr>
					<tr>
						<td>Alamat Sopir</td>
						<td><input type="text" class="form-control" id="e_alamat" name="alamat"></td>
					</tr>
					<tr>
						<td>Telp Sopir</td>
						<td><input type="text" class="form-control" id="e_telp" name="telp"></td>
					</tr>
					<tr>
						<td>No Sim</td>
						<td><input type="text" class="form-control" id="e_sim" name="sim"></td>
					</tr>
					<tr>
						<td>Tarif</td>
						<td><input type="text" class="form-control" id="e_trf" name="trf"></td>
					</tr>
					<tr>
						<td><button class="btn btn-danger" onclick="closePoup()">Batal</button></td>
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
					Data Sopir
				</div>
				<div class="panel-body">
					<table class="table">
						<thead>
							<td>IDSopir</td>
							<td>Nama Sopir</td>
							<td>Alamat Sopir</td>
							<td>Telp Sopir</td>
							<td>No Sim</td>
							<td>Tarif per jam</td>
							<td>action</td>
						</thead>
						<tbody>
							<?php foreach($fS as $data){ ?>
							<tr>
								<td><?php echo $data['IDSopir']  ?></td>
								<td><?php echo $data['NmSopir']  ?></td>
								<td><?php echo $data['AlmtSopir']  ?></td>
								<td><?php echo $data['TelpSopir']  ?></td>
								<td><?php echo $data['NoSim']  ?></td>
								<td><?php echo $data['TarifPerJam']  ?></td>
								<td><a href="index.php?action=HapusSopir&i=<?php echo base64_encode($data['IDSopir']) ?>"><button class="btn btn-danger">del</button></a> <button class="btn btn-warning" onclick="EditSopir('<?php echo $data['IDSopir']?>','<?php echo $data['NmSopir']?>','<?php echo $data['AlmtSopir']?>','<?php echo $data['TelpSopir'] ?>','<?php echo $data['NoSim'] ?>','<?php echo $data['TarifPerJam'] ?>')">updt</button></td>
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