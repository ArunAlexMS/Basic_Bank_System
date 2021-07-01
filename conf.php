<?php

	$db_host='localhost';
	$db_user='id9654324_Arun';
	$db_pass='Arun@16';
	$db_name='id9654324_credit';

	try {
		$pdo= new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	}catch(PDOException $e){
		echo $e->getMessage();
	}

?>
