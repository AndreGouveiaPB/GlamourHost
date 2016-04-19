<?php 


	try {
		$connection = new PDO('mysql:host=localhost;dbname=lunas', 'root', '123meu');
		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		echo $e->getMessage();
		die();
	}

  
//	$connection = mysql_connect("localhost","root","123meu") or die ("erro na conexao");
//	mysql_select_db("casa_blanca");
?>
