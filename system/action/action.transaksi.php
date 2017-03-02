<?php


class transaksi
{

	protected $db;

	function __construct($db)
	{
		$this->db = $db;
	}

		function fetch()
		{

			$sql = "SELECT tb_kendaraan.* , tb_transaksi_sewa.* , tb_sopir.* , tb_merk.* , tb_karyawan.*
					FROM tb_transaksi_sewa 
					INNER JOIN tb_kendaraan 
					ON tb_transaksi_sewa.NoPlat = tb_kendaraan.NoPlat 
					INNER JOIN tb_sopir 
					ON tb_transaksi_sewa.IDSopir = tb_sopir.IDSopir
					INNER JOIN tb_karyawan
					ON tb_transaksi_sewa.nik = tb_karyawan.nik
					INNER JOIN tb_merk
					ON tb_kendaraan.KodeMerk = tb_merk.KodeMerk";
			$x = $this->db -> prepare($sql);
			$x -> execute();
			$f = $x -> fetchAll();
			return $f;

		}

		function tambah($ktp,$npt,$nik,$ids,$tgpe,$tgpi,$jmpi,$tkr,$jkr,$kimp,$bbp,$komp)
		{

			/* ------------------------------------------------------ */

			$q = "SELECT * FROM tb_transaksi_sewa";
			$j = $this->db -> prepare($q);
			$j -> execute();
			$r = $j -> rowCount();
			$art = $r + 1;

			$nt = "RENT".$art;

			/* ------------------------------------------------------ */

			$sql = "INSERT INTO tb_transaksi_sewa(NoTransaksi,
												  NoKtp,
												  NoPlat,
												  nik,
												  IDSopir,
												  TglPesan,
												  TglPinjam,
												  JamPinjam,
												  TglKembaliRencana,
												  JamKembaliRencana,
												  KiloMeterPinjam,
												  BBMPinjam,
												  KondisiMobilPinjam
												  )
					VALUES(?,
						   ?,
						   ?,
						   ?,
						   ?,
						   ?,
						   ?,
						   ?,
						   ?,
						   ?,
						   ?,
						   ?,
						   ?)";
			$x = $this->db -> prepare($sql);
			$x -> execute(array($nt,$ktp,$npt,$nik,$ids,$tgpe,$tgpi,$jmpi,$tkr,$jkr,$kimp,$bbp,$komp));

			$StatusRental = "Y";

			if ($x) {
				$s = "UPDATE tb_kendaraan SET StatusRental = ?
					  WHERE NoPlat = ?";
				$k = $this->db -> prepare($s);
				$k -> execute(array($StatusRental,$npt));
			}else{
				return 'fail';
			}
		}

}