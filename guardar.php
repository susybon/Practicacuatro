<?php

//Se Agrega el archivo que contine la conexion a la BD
include "conexion.php";

$nombre=$_POST['nomb'];
$clave=$_POST['clav'];
$pr=$_POST['prec'];
$existencia=$_POST['existen'];
$proveedor=$_POST['prov'];

$sql="INSERT INTO equipos_computo VALUES('','$nombre','$clave','$pr','$existencia','$proveedor')";
$res=mysql_query($sql,$conexion);
if($res){
	echo "Los datos se registraron de manera exitosa";
	echo "nombre:".$nombre." clave:".$clave." Precio:".$pr." exist:".$existencia." Proveedor:".$proveedor;
	}else{
		  echo "Se produjo un error al momento de registar los datos:".mysql_error();
		}
mysql_close($conexion);

?>