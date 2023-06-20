<?php
require('conexion.php');
$servername = "localhost";
$dbname = "biblioteca_libros";
$username = "root";
$password = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $confirm_contrasena = $_POST['confirm_contrasena'];

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if ($contrasena != $confirm_contrasena) {
            echo 'Las contraseñas no coinciden';
        } else {
            // Consulta de inserción
            $consulta = "INSERT INTO registro (user, pass) VALUES (:usuario, :contrasena)";
            $statement = $conn->prepare($consulta);
            $statement->bindParam(':usuario', $usuario);
            $statement->bindParam(':contrasena', $contrasena);
            $statement->execute();

           // echo 'Registro insertado correctamente';
            header( 'Location: inicioSesion.php' ) ;

        }
    } catch(PDOException $e) {
        echo 'Error al insertar el registro: ' . $e->getMessage();
    }

    $conn = null; // Cerrar la conexión
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registrarse</title>
    <link rel="stylesheet" href="estilos.css">
    <body bgcolor="61727C"></body>
</head>
<body>
    <div class="div"> 
        <div class="imagen">
            <center><img src="Imagenes\imagen para el proyecto.jpeg" alt=" "></center>
        </div>
        <div class=" adentroDIV">
            <center>
                <h1>registrarse</h1>
                <!-- action="inicioSesion.php"-->
                <form  method="POST">
                    <center><label for="usuario">Usuario:</label></center>
                    <center><input type="text"  name="usuario" required><br></center>

                    <center><label for="contrasena">Contraseña:</label></center>
                   <center> <input type="password"  name="contrasena" required><br></center>
                    
                    <center><label for="confirm_contrasena">Confirmar Contraseña:</label></center>
                    <center><input type="password"  name="confirm_contrasena" required><br></center>
                    <br>

                    <center><input type="submit"  name="registro" value="registrarse"></center>
                </form>
            </center> 
        </div>
    </div>
</body>
</html>



