<?php 
	$fetch = new mobil($db);
	$fS = $fetch -> fetch();
	$lT = $fetch -> listType();
	$mL = $fetch -> fetchMerk();

?>
<div class="shadow"></div>
<div class="col-md-12" id="popup" style="margin-top: 0px;position: absolute;>
	<div class="col-md-8 panel-tengah">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Tambah Data Mobil
			</div>
			<div class="panel-body">
				<form method="POST" action="index.php?action=TambahMobil">
				<table class="table info-sign">
					<tr>
						<td>Data Pemilik</td>
					</tr>
					<tr>
						<td>No Plat</td>
						<td><input type="text" class="form-control" required="" name="npt"></td>
					</tr>
					<tr>
						<td>Tahun</td>
						<td><input type="text" class="form-control" required="" name="thn"></td>
					</tr>
					<tr>
						<td>Tarif per Jam</td>
						<td><input type="text" class="form-control" required="" name="tpj"></td>
					</tr>
					<tr>
						<td>Status Rental</td>
						<td>
							<select name="stat" class="form-control">
								<option value="Y">Y</option>
								<option value="N">N</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Type Mobil</td>
						<td><select name="type" class="form-control">
							<?php foreach ($lT as $data) { ?>
								<option value="<?php echo $data['IDType'] ?>"><?php echo $data['NmType'] ?></option>
							<?php }?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Merek</td>
						<td>
							<select class="form-control" name="mrk"><?php foreach ($mL as $data) { ?>
								<option value="<?php echo $data['KodeMerk'] ?>"><?php echo $data['NmMerk'] ?></option>
								<?php }?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Data Pemilik</td>
					</tr>
					<tr>
						<td>Nama Pemilik</td>
						<td><input type="text" class="form-control" name="nmpk"></td>
					</tr>
					<tr>
						<td>Alamat Pemilik</td>
						<td><input type="text" class="form-control" name="ampk"></td>
					</tr>
					<tr>
						<td>Telp Pemilik</td>
						<td><input type="text" class="form-control" name="tepk"></td>
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
				Edit Mobil
			</div>
			<div class="panel-body">
			<form method="POST" action="index.php?action=EditMobil">
				<table class="table info-sign">
						<input type="text" id="plt" name="plt" hidden="hidden">
					<!--
					<tr>
						<td>No Plat</td>
						<td><input type="text" class="form-control" id="plt" required="" name="npt"></td>
					</tr>
					-->
					<tr>
						<td>Tahun</td>
						<td><input type="text" class="form-control" id="thn" required="" name="thn"></td>
					</tr>
					<tr>
						<td>Tarif per Jam</td>
						<td><input type="text" class="form-control" id="tpj" required="" name="tpj"></td>
					</tr>
					<tr>
						<td>Status Rental</td>
						<td>
							<select name="stat" class="form-control" id="sts">
								<option value="Y">Y</option>
								<option value="N">N</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Type Mobil</td>
						<td><select name="type" class="form-control" id="tmbl">
							<?php foreach ($lT as $data) { ?>
								<option value="<?php echo $data['IDType'] ?>"><?php echo $data['NmType'] ?></option>
							<?php }?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Merek</td>
						<td>
							<select class="form-control" name="mrk" id="mrk"><?php foreach ($mL as $data) { ?>
								<option value="<?php echo $data['KodeMerk'] ?>"><?php echo $data['NmMerk'] ?></option>
								<?php }?>
							</select>
						</td>
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
					Data mobil
				</div>
				<div class="panel-body">
					<table class="table">
						<thead>
							<td>No Plat</td>
							<td>Jenis</td>
							<td>Merek</td>
							<td>Tahun</td>
							<td>Tarif /jam</td>
							<td>Pemilik</td>
							<td>Status Rental</td>
							<td>action</td>
						</thead>
						<tbody>
							<?php foreach($fS as $data){ ?>
							<tr>
								<td><?php echo $data['NoPlat']  ?></td>
								<td><?php echo $data['NmType']  ?></td>
								<td><?php echo $data['NmMerk']  ?></td>
								<td><?php echo $data['Tahun']  ?></td>
								<td><?php echo $data['TarifPerJam'] ?></td>
								<td><?php echo $data['NmPemilik'] ?></td>
								<td><?php 
												if ($data['StatusRental'] == 'N') {
													echo "<a href='index.php?page=data/pelanggan&p=".base64_encode($data['NoPlat'])."'><button class='btn btn-primary'>Available</button></a>";
												}else{
													echo "<button class='btn btn-warning'>Reserved</button>";
												}

								 ?>
								 </td>
								<td><a href="index.php?action=HapusMobil&i=<?php echo base64_encode($data['NoPlat']) ?>"><button class="btn btn-danger">del</button></a> <button class="btn btn-warning" onclick="EditMobil('<?php echo $data['NoPlat']?>','<?php echo $data['IDType']?>','<?php echo $data['KodeMerk']?>','<?php echo $data['Tahun'] ?>','<?php echo $data['StatusRental'] ?>','<?php echo $data['TarifPerJam'] ?>')">updt</button></td>
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