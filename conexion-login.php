<?php

$dbname="sena";
$dbuser="root";
$dbhost="localhost";
$dbpass="";

$conexion=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if (!$conexion) {
    die("No se establece la conexión: " . mysqli_connect_error());
}
$usuario = $_POST ['usuario'];
$password = $_POST ['password'];

$consulta = mysqli_query($conexion,"SELECT * FROM loguin WHERE usuario = '$usuario' AND password = '$password'");
$numero_de_filas = mysqli_num_rows($consulta);

if ($numero_de_filas == 1) {
    header("Location: formulario.php");

} else if ($numero_de_filas == 0){
    echo "<script language='javaScript'>
    alert('FATAL ERROR:  los datos ingresados son incorrectos :(');
    location.assign('index.php')
    </script>";
}
?>