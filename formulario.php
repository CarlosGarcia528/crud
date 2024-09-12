<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Datos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        nav {
        display: flex;
        flex-direction: row;
        justify-content: center;
        background-color: #007bff;
        margin-bottom: 10px;
        }

        h2 {
        margin-bottom: 0.5em;
        }

        ul {
        display: flex;
        flex-direction: row;
        gap: 0.5em;
        list-style-type: none;
        }

        li {
        margin-right: 1.5em;
        }

        a {
        text-decoration: none;
        color: white;
        }


        form {
            margin-top: 100px;
            max-width: 400px;
            margin: 0 auto;
            padding: 22px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
            color: #900F93; /* Color del título */
        }

        label {
            margin-bottom: 10px; /* Aumentar el espacio entre etiquetas */
            color: #333; /* Color del texto de las etiquetas */
            display: block; /* Colocar cada etiqueta en una línea nueva */
        }

        input[type="text"] {
            padding: 10px;
            margin-bottom: 25px; /* Aumentar el espacio entre campos */
            border: 1px solid #ccc;
            border-radius: 3px;
            width: 100%;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #038148;
        }
    </style>
</head>
<body>
<nav>
  <ul>
    <li><a href="#inicio">Ingresar</a></li>
    <li><a href="productos.php">Productos</a></li>
    <li><a href="index.php">Salir</a></li>
  </ul>
</nav>

    <form action="guardar.php" name="" method="POST">
        <h2>Guardar Datos</h2>
        <label for="identificacion">Identificación:</label>
        <input type="text" id="identificacion" name="identificacion" required>

        <label for="nombres">Nombres:</label>
        <input type="text" id="nombres" name="nombres" required>

        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" required>

        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" required>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required>

        <label for="cargo">cargo:</label>
        <input type="text" id="cargo" name="cargo" required>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>