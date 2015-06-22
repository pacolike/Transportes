<?php
	
	include("./inc/comun.php");
	include("./inc/func_bd.php");
	import_request_variables("pg");

	$link = conectar($_HOST, $_USUARIO, $_PASSWD, $_BD);

	#echo $descripcion."<br>";

	if(!empty($id)){

		$query = "UPDATE gastos SET status = 1 WHERE id_gastos = '$id' LIMIT 1;";
		$num_regs = 0;
    	$result = query_idu($query,0);

    	header("Location:gastos.php");

    	die();
	}


	$query = "INSERT INTO gastos (descripcion,status) VALUES ('$descripcion',0);";
	$num_regs = 0;
    $result = query_idu($query,0);

    header("Location:gastos.php");

?>