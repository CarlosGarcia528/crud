<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <style>
        /* Estilos CSS aquí... */
    </style>
</head>
<body>
<style>
    body {
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 10px;
                background: #ffffff;
                
                
            }
            
            
            form {
                background-color: #fff ;
                width: 400px;
                margin: 50px auto;
                padding: 20px;
                border-radius: 5px solid #BDBDBD;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            h1 {
                opacity: .8;
            }
            
            h2 {
                text-align: center;
                margin-bottom: 20px;
            }
            
            label {
                display: block;
                margin-bottom: 10px;
                opacity: .5;
            }
            
            input[type="text"],
            input[type="password"],
            input[type="email"] {
                width: 100%;
                padding: 10px;
                margin-bottom: 20px;
                border: 1px solid #ccc;
                border-radius: 5px;
                box-sizing: border-box;
                font-size: 20px;
                opacity: .9;
            }
            
            button {
                display: block;
                width: 100%;
                padding: 10px;
                background-color: #3B71CA;
                color: #fff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-size: 16px;
            }
            
            button:hover {
                background-color: #386BC0;
            }
            
            .error {
                color: #f00;
                font-weight: bold;
                margin-bottom: 10px;
            }
            .enlace{
                color:#fff;
                text-decoration: none;
            }
    </style>
    <form action="registro.php" method="POST">
        <center><h1 style="color: #000">Registro de Usuario</h1></center>
        
        <?php if (isset($registro_exitoso)) { ?>
            <p class="registro-exitoso"><?php echo $registro_exitoso; ?></p>
        <?php } ?>
        
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        
        <label for="usuario">Nombre de usuario:</label>
        <input type="text" name="usuario" id="usuario" required>
        
        <label for="password">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required>
        
        <button type="submit">Registrarse</button>
    </form>
</body>
</html>
