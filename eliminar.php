<?php
 require 'conexion.php';
 $id = $_GET['id_factura'];
 

$elimina = " DELETE FROM productos WHERE id_factura= '$id'";

$query = mysqli_query($conectar, $elimina);

if($query===TRUE){

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