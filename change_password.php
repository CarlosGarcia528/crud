<?php 
require_once('conexion.php');
$id = $_POST['id'];
$pass = $_POST['new_password'];

$query = "UPDATE loguin set password= '$pass' WHERE id= $id";
$conectar->query($query);

header("Location: ./index.php?message=success_password");

?>