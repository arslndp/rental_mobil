<?php

class mobil
{

	protected $db;

	function __construct($db)
	{
		$this->db = $db;
	}

		function fetchMerk()
		{
			$sql = "SELECT * FROM tb_merk";
			$x = $this->db -> prepare($sql);
			$x -> execute();
			$f = $x -> fetchAll();
			return $f;
		}

		function tambah($no,$id,$mrk,$thn,$tpj,$srnt,$nmpk,$ampk,$tepk)
		{
			$q = "INSERT INTO tb_kendaraan(NoPlat , IDType , KodeMerk , Tahun , TarifPerJam , StatusRental)
				  VALUES(?,?,?,?,?,?)";
			$x = $this->db -> prepare($q);
			$x -> execute(array($no,$id,$mrk,$thn,$tpj,$srnt));

			if ($x) {

				$qT = "SELECT * FROM tb_pemilik";
				$xT = $this->db -> prepare($qT);
				$xT -> execute();
				$fT = $xT -> rowCount();

				$art = $fT + 1;

				$h = 'PM'.$art;

				$sql = "INSERT INTO tb_pemilik(KodePemilik,NoPlat,NmPemilik,AlmtPemilik,TelpPemilik)
						VALUES(?,?,?,?,?)";
				$g = $this->db -> prepare($sql);
				$g -> execute(array($h,$no,$nmpk,$ampk,$tepk));

				if ($g) {
					return 'ok';
				}else{
					return 'fail';
				}
				
			}else{
				return 'fail';
			}

		}

		function fetch()
		{
			$sql = 'SELECT tb_kendaraan.* , tb_merk.* , tb_type.* ,tb_pemilik.*
					FROM tb_kendaraan
					INNER JOIN tb_merk ON tb_merk.KodeMerk = tb_kendaraan.KodeMerk
					INNER JOIN tb_type ON tb_type.IDType = tb_kendaraan.IDType
					INNER JOIN tb_pemilik ON tb_pemilik.NoPlat = tb_kendaraan.NoPlat';
			$x = $this->db -> prepare($sql);
			$x -> execute();
			$f = $x -> fetchAll();
			return $f;
		}

		function listType()
		{
			$sql = "SELECT * FROM tb_type";
			$x = $this->db -> prepare($sql);
			$x -> execute();
			$f = $x -> fetchAll();
			return $f;
		}

		function hapus($i)
		{
			$sql ='DELETE FROM tb_kendaraan WHERE NoPlat = ?';
			$x = $this->db -> prepare($sql);
			$x -> execute(array($i));
			if ($x) {
			 	return 'ok';
			 } else{
			 	return 'fail';
			 }
		}

		function edit($mrk,$typ,$thn,$tpj,$stat,$plt)
		{
			$sql = 'UPDATE tb_kendaraan SET KodeMerk = ? ,
											IDType = ? , 
											Tahun = ? ,
											TarifPerJam = ? ,
											StatusRental = ?
					WHERE NoPlat = ?';
			$x = $this->db -> prepare($sql);
			$x -> execute(array($mrk,$typ,$thn,$tpj,$stat,$plt));
			
			if($x){
				return 'ok';
			}else{
				return 'fail';
			}
		}
}