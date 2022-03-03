<?php 
$servidor  ="saiz.cid.net"; 
$usuario   ="c2sql11145co_eu";  
$clave     ="goYidZD!P2";
$basedatos ="c2sql11145co_eu";

$db_connection = mysqli_connect($servidor, $usuario, $clave, $basedatos) or die(mysql_error());

if (!$db_connection) {
    die('No se ha podido conectar a la base de datos');
}else
    echo mysqli_connect_error($db_connection);
?>
