<?php

/*$usario="root";
$passwd="";
$servidor="localhost";
$BD="pcactual";*/

$usario="n260m_14426545";
$passwd="drag0n";
$servidor="sql206.260mb.net";
$BD="n260m_14426545_pcatual";

$conexion=mysql_connect($servidor,$usario,$passwd)or die("Error al conectarse a la base de datos:".mysql_error());
mysql_select_db($BD,$conexion);
?>