<?php
 require 'conexion.php';
 
 $identificacion  = $_POST['identificacion'];
 $nombres  = $_POST['nombres'];
 $apellidos  = $_POST['apellidos'];
 $telefono  = $_POST['telefono'];
 $direccion  = $_POST['direccion'];
 $cargo  = $_POST['cargo'];
 

$insertar = "INSERT INTO aprendices VALUES ('$identificacion','$nombres','$apellidos', '$telefono', '$direccion','$cargo') ";

$query = mysqli_query($conectar, $insertar);

if($query){

   echo "<script> alert('correcto');
    location.href = 'https://oferta.senasofiaplus.edu.co/sofia-oferta/';
   </script>";

}else{
    echo "<script language='javaScript'>
//         alert('ERROR:los datos no fueron modificados correctamente al Registro');
//         location.assign('index.php')
//         </script>";
}





?>