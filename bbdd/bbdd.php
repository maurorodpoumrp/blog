<?php include "configuracion.php"; ?>

<?php
//Función para conectar a la Base de Datos
function conectarBD(){
	try{
		$con = new PDO("mysql:host=".HOST.";dbname=".DBNAME.";charset=utf8", USER, PASS);
	
		$con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo "Error: Error al conectar la BD: ".$e->getMessage();
		file_put_contents("PDOErrors.txt", "\r\n".date('j F, Y, g:i a').$e->getMessage(), FILE_APPEND);
		exit;
	}
	return $con;
}

//Función para desconectar de la base de datos
function desconectarBD($con){
	$con = NULL;
	return $con;
}

?>