<?php

defined('BASEPATH') Or exit('no direct link');
/* -------------------------------- */

/* --------------------------------- */


class sopir
{

	protected $db;

	function __construct($db)
	{
		$this->db = $db;
	}

		function tambah($nm,$alm,$tel,$nsm,$tpj)
		{
			$sql = 'SELECT * FROM tb_sopir';
			$v = $this->db -> prepare($sql);
			$v -> execute();
			$rv = $v -> rowCount();

			$art = $rv+1;

			$id = 'SPR'.$art;

			$q = "INSERT INTO tb_sopir(IDSopir , NmSopir , AlmtSopir , TelpSopir , NoSim , TarifPerJam)
				  VALUES(?,?,?,?,?,?)";
			$x = $this->db -> prepare($q);
			$x -> execute(array($id,$nm,$alm,$tel,$nsm,$tpj));

			if ($x) {
				return 'ok';
			}else{
				return 'fail';
			}

		}

		function fetch()
		{
			$sql = 'SELECT * FROM tb_sopir';
			$x = $this->db -> prepare($sql);
			$x -> execute();
			$f = $x -> fetchAll();
			return $f;
		}

		function hapus($i)
		{
			$sql ='DELETE FROM tb_sopir WHERE IDSopir = ?';
			$x = $this->db -> prepare($sql);
			$x -> execute(array($i));
			if ($x) {
			 	return 'ok';
			 } else{
			 	return 'fail';
			 }
		}

		function edit($nm,$alm,$tlp,$sim,$trf,$id)
		{
			$sql = 'UPDATE tb_sopir SET NmSopir = ? , 
										AlmtSopir = ? , 
										TelpSopir = ? ,
										NoSim = ?,
										TarifPerJam = ?
					WHERE IDSopir = ?';
			$x = $this->db -> prepare($sql);
			$x -> execute(array($nm,$alm,$tlp,$sim,$trf,$id));
			
			if($x){
				return 'ok';
			}else{
				return 'fail';
			}
		}

}