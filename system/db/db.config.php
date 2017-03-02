<?php
	
	defined('BASEPATH') Or exit('no direct link');

	$mysql = array(
						username => 'root',
						password => 'toor'
		);

	try {
		
		$db = new PDO('mysql:host=localhost;dbname=rental_mobil',$mysql['username'],$mysql['password']);

	} catch (PDOException $e) {
		
		echo __Db_Down__;

	}