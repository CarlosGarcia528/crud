<?php 

	$conexion=mysqli_connect('localhost','root','','sena');

 ?>

<!DOCTYPE html>
<html>
<head>
    <style>
        /* Estilos para la tabla */
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        /* Estilos para el formulario */
        .product-form {
            width: 50%;
            margin: 0 auto;
        }

        .product-form label, .product-form input {
            display: block;
            margin-bottom: 10px;
        }

        .product-form input[type="text"] {
            width: 100%;
            padding: 5px;
        }

        .product-form input[type="submit"] {
             border: none; 
            color: white; 
            padding: 14px 28px; 
            cursor: pointer; 
            border-radius: 5px;
            cursor: pointer;
            text-transform:capitalize;
            font-weight: bold;
        }
        .success {background-color: #04AA6D;} 
        .success:hover {background-color: #46a049;}

        /* Estilos para el botón de agregar */
        .add-button {
            display: block;
            margin-top: 20px;
            text-align: center;
        }
        .flecha{
            background: black;
        }
        .a1{
            border: none; 
            color: white; 
            padding: 14px 28px; 
            cursor: pointer; 
            border-radius: 5px; 
            text-decoration: none;
            display: inline-block;
            text-transform:capitalize;
            font-weight: bold;
        }
        .imprimir{
            border: none; 
            color: black; 
            padding: 14px 28px; 
            cursor: pointer; 
            border-radius: 5px; 
            text-decoration: none;
            display: inline-block;
            text-transform:capitalize;
            font-weight: bold;
        }
        
        .primary {background-color: #007bff;} 
        .primary:hover {background: #0b7dda;}
        .secondary {background-color: #f44336;} 
        .secondary:hover {background: #da190b;}
        .tercery {background-color: white; border: 2px solid #ff9800;} 
        .tercery:hover {background: #e68a00; color: white;}

    </style>
</head>
<body>

<a class ="flecha" href="formulario.php"><i class="fa-solid fa-arrow-left"></i></a>
    
    <div class="product-form">
        <h2>Ingresar Producto</h2>
        <form action="guardar1.php" name="" method="POST">
            <label for="productos">Nombre del Producto:</label>
            <input type="text" id="productos" name="productos">

            <label for="precio">Precio:</label>
            <input type="text" id="precio" name="precio">

            <label for="cantidad">Cantidad:</label>
            <input type="text" id="cantidad" name="cantidad">

            <input class="success" type="submit" value="Agregar Producto">
        </form>
    </div>

    <table border="1">
    <tr>
        <th>PRODUCTOS</th>
        <th>PRECIO</th>
        <th>CANTIDAD</th>
        <th>ELIMINAR</th>
        <th>EDITAR</th>
        
        
    </tr>

    <?php
    $sql = "select * from productos";
    $resultado = mysqli_query($conexion, $sql);
    while ($mostrar = mysqli_fetch_assoc($resultado)) {
    ?>

    <tr>
        <td><?php echo $mostrar['productos'] ?></td>
        <td><?php echo $mostrar['precio'] ?></td>
        <td><?php echo $mostrar['cantidad'] ?></td>
        <td><a class ="a1 secondary" href="eliminar.php?id_factura=<?php echo $mostrar['id_factura']?>">eliminar</a></td>
        <td><a class="a1 primary" href="editar-form.php?id_factura=<?php echo $mostrar['id_factura']?>">editar</a></td>
        
        
    </tr>

    <?php
    }
    ?>
</table>
<a class = "imprimir tercery" href="generar_factura.php?id_factura= id_factura" >Imprimir Factura</a>
</body>
</html>