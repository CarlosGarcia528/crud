<?php
 require 'conexion.php';
 $id = $_POST['id'];
 $productos  = $_POST['productos'];
 $precio = $_POST['precio'];
 $cantidad  = $_POST['cantidad'];
 

$insertar = "INSERT INTO productos VALUES ('$id', '$productos','$precio','$cantidad') ";

$query = mysqli_query($conectar, $insertar);

if($query){

   echo "<script> alert('correcto');
    location.href = './productos.php';
   </script>";

}else{
    echo "<script language='javaScript'>
//         alert('ERROR:los datos no fueron modificados correctamente al Registro');
//         location.assign('index.php')
//         </script>";
}
?>