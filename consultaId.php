<?php
include "conexion.php";
$id=$_POST['id'];

$sql="SELECT * FROM equipos_computo where Id=$id";
$result=mysql_query($sql,$conexion);
$info= array();
if($result){
$i=0;	
while($fila=mysql_fetch_assoc($result)){
	$info[$i]=$fila;
	$i=$i+1;
	}
}else{
	echo "Error al ejecutar la consulta:".mysql_error();
}
mysql_close($conexion);
echo json_encode($info);

?>