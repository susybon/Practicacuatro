<?php
//Se Agrega el archivo que contine la conexion a la BD
include "conexion.php";

$id=$_POST['id'];
$nombre=$_POST['nomb'];
$clave=$_POST['clav'];
$pr=$_POST['prec'];
$existencia=$_POST['existen'];
$proveedor=$_POST['prov'];

$sql="UPDATE equipos_computo SET Id='$id', Nombre_equipo='$nombre', Clave='$clave', Precio='$pr', Existencia='$existencia', Proveedor='$proveedor' WHERE Id=$id";
$res=mysql_query($sql,$conexion);
if($res){
	echo "Los datos se actualizaron de manera exitosa";
	echo "nombre:".$nombre." clave:".$clave." Precio:".$pr." exist:".$existencia." Proveedor:".$proveedor;
	}else{
		  echo "Se produjo un error al momento de Actualizar los datos:".mysql_error();
		}
mysql_close($conexion);
?>