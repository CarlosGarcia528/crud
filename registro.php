<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nombre = $_POST["nombre"];
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    // con  esta linea  te  conectas a  la  base  de datos
    $servername = "localhost";
    $username = "root";
    $password_db = "";
    $dbname = "sena";

    $conn = new mysqli($servername, $username, $password_db, $dbname);

    // Verifica la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Inserta los datos en la tabla de usuarios 
    $sql = "INSERT INTO loguin (nombre, usuario, password, email) VALUES ('$nombre', '$usuario', '$password', '$email')";

    if ($conn->query($sql) === TRUE) {
        $registro_exitoso = "Registro exitoso. ¡Inicia sesión ahora!";
        echo "<script> alert('correcto');
                     location.href = './loginView.php';
            </script>";
    } else {
        $error = "Error al registrar el usuario: " . $conn->error;
    }

    // Cierra la conexión
    $conn->close();
}
?>