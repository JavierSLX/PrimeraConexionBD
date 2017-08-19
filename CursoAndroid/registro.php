<?php include ('functions.php');
$nombres=$_GET['nombres'];
$telefono=$_GET['tel'];


ejecutarSQLCommand("INSERT INTO  `usuario` (nombres, telefono)
VALUES (
'$nombres' ,
'$telefono')

 ON DUPLICATE KEY UPDATE `nombres`= '$nombres',
`telefono`='$telefono';");

 ?>