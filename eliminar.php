<?php

include "conexion.php";
$id=$_POST['id'];

$sql="DELETE  FROM equipos_computo where id=$id";
$resp=mysql_query($sql,$conexion);

if($resp){
echo "El registro fue eliminado correctamente"; 	
}else{
echo "Ocurrioun error al eliminar el registro:".mysql_error();
}
mysql_close($conexion);
?>