<?php
include 'conexion.php';
$id=$_GET['ID'];
$sqli="delete from menus where id='".$id."'";
mysqli_query($conexion, $sql);
header('location: Index.php')
?>
