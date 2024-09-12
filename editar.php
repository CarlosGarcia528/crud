<?php
 require 'conexion.php';
 $id = $_POST['id_factura'];
 $productos  = $_POST['productos'];
 $precio = $_POST['precio'];
 $cantidad  = $_POST['cantidad'];
 

$edita = "UPDATE productos SET 
                   productos='".$productos."',
                   precio='".$precio."',
                   cantidad='".$cantidad."' WHERE id_factura = '".$id."'";

$query = mysqli_query($conectar, $edita);

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