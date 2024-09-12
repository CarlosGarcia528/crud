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
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        /* Estilos para el botón de agregar */
        .add-button {
            display: block;
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    
    <div class="product-form">
        <h2>Editar Productos</h2>
        <form action="editar.php" name="" method="POST">
            <?php
                require 'conexion.php';
                 $sql = "select * from productos WHERE id_factura = ".$_GET['id_factura']."";
                 $resultado = mysqli_query($conexion, $sql);
                 $row = mysqli_fetch_assoc($resultado)
            ?>
            <!--traer datos de los productos-->
            <input type="hidden" id="id_factura" name="id_factura"  value = "<?php echo $row['id_factura'] ?>">

            <label for="productos">Nombre del Producto:</label>
            <input type="text" id="productos" name="productos" value = "<?php echo $row['productos'] ?>">

            <label for="precio">Precio:</label>
            <input type="text" id="precio" name="precio" value = "<?php echo $row['precio'] ?>">

            <label for="cantidad">Cantidad:</label>
            <input type="text" id="cantidad" name="cantidad" value = "<?php echo $row['cantidad'] ?>">

            <input type="submit" value="Editar Producto">
        </form>
    </div>

    
</body>
</html>
