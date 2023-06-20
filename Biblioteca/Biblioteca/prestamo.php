<!DOCTYPE html>
<html>
<head>
<center><img src="Imagenes\imagen para el proyecto.jpeg" alt=""></center>
    <title>Formulario de Préstamo</title>
    <body bgcolor="61727C"></body>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }

        h2 {
            color: #333;
        }

        form {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biblioteca_libros";

// Función para eliminar un préstamo de la base de datos
function eliminarPrestamo($id) {
    global $servername, $username, $password, $dbname;
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    $sql = "DELETE FROM Prestamos WHERE ID = '$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Préstamo eliminado correctamente de la base de datos.";
    } else {
        echo "Error al eliminar el préstamo: " . $conn->error;
    }

    $conn->close();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["eliminar"])) {
        $prestamoID = $_POST["eliminar"];
        eliminarPrestamo($prestamoID);
    } else {
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }

        $ID = $_POST["ID"];
        $LibroID = $_POST["LibroID"];
        $FechaPrestamo = $_POST["FechaPrestamo"];
        $FechaDevolucion = $_POST["FechaDevolucion"];

        $sql = "INSERT INTO Prestamos (ID, LibroID, FechaPrestamo, FechaDevolucion)
                VALUES ('$ID', '$LibroID', '$FechaPrestamo', '$FechaDevolucion')";

        if ($conn->query($sql) === TRUE) {
            echo "Préstamo insertado correctamente en la base de datos.";
        } else {
            echo "Error al insertar el préstamo: " . $conn->error;
        }

        $conn->close();
    }
}
?>

<h2>Formulario de Préstamo</h2>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="ID">ID:</label>
    <input type="text" name="ID" id="ID" required><br><br>

    <label for="LibroID">LibroID:</label>
    <input type="text" name="LibroID" id="LibroID" required><br><br>

    <label for="FechaPrestamo">Fecha de Préstamo:</label>
    <input type="date" name="FechaPrestamo" id="FechaPrestamo" required><br><br>

    <label for="FechaDevolucion">Fecha de Devolución:</label>
    <input type="date" name="FechaDevolucion" id="FechaDevolucion" required><br><br>

    <input type="submit" value="Enviar Préstamo">
</form>

<!-- Formulario de eliminación -->
<h2>Eliminar Préstamo</h2>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="eliminar">ID del préstamo a eliminar:</label>
    <input type="text" name="eliminar" id="eliminar" required><br><br>
    <input type="submit" value="Eliminar Préstamo">
</form>

</body>
</html>
