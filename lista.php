<?php 

	$conexion=mysqli_connect('localhost','root','','sena');

 ?>


<!DOCTYPE html>
<html>
<head>
  <title>Formulario de visualización de clientes</title>
  <style>
    
    body {
    background:
    background-size cover;
    background-position: 0px;
    height: calc(90vh - 60px)
    }
    button{
    background-color: #4CAF50; 
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
    
    h1 {
      text-align: center;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
      background-color: #B3EFEB ;
      
    }

    th, td {
      padding: 30px;
      text-align: left;
      border-bottom: 0px solid #ddd;
    }

    th {
      background-color: #E306D9;
      color: white;
      
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
    }
  </style>
</head>
<body>
  <div class="container">
   <center><h4>LISTA DE CLIENTES</h4></center>

<table border="1">
    <tr>
        <th>IDENTIFICACION</th>
        <th>NOMBRES</th>
        <th>APELLIDOS</th>
        <th>TELEFONO</th>
        <th>DIRECCION</th>
        <th>CARGO</th>
        
        
    </tr>

    <?php
    $sql = "select * from aprendices";
    $resultado = mysqli_query($conexion, $sql);
    while ($mostrar = mysqli_fetch_assoc($resultado)) {
    ?>

    <tr>
        <td><?php echo $mostrar['identificacion'] ?></td>
        <td><?php echo $mostrar['nombres'] ?></td>
        <td><?php echo $mostrar['apellidos'] ?></td>
        <td><?php echo $mostrar['telefono'] ?></td>
        <td><?php echo $mostrar['direccion'] ?></td>
        <td><?php echo $mostrar['cargo'] ?></td>
        
        
    </tr>

    <?php
    }
    ?>
</table>

</body>
</html>