<!DOCTYPE html>
<html>
<head>
  <title>Eliminar Autor</title>
  <body bgcolor="61727C"></body>
  <link rel="stylesheet" type="text/css" href="eliminarli.css">
</head>
<body>
  <h1>Eliminar Autor</h1>
  <table>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Nacionalidad</th>
      <th>Fecha de Nacimiento</th>
      <th>Premios</th>
      <th>Apellido</th>
      <th>Acciones</th>
    </tr>
    
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "biblioteca_libros";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    function eliminarAutor($id) {
        global $conn;
        $sql = "DELETE FROM autores WHERE ID = $id";
        if ($conn->query($sql) === TRUE) {
            echo "El autor con ID $id ha sido eliminado correctamente.";
        } else {
            echo "Error al eliminar el autor: " . $conn->error;
        }
    }

    if (isset($_GET['eliminar']) && !empty($_GET['eliminar'])) {
        $autorID = $_GET['eliminar'];
        eliminarAutor($autorID);
    }

    $sql = "SELECT * FROM autores";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Nombre</th><th>Nacionalidad</th><th>Fecha de Nacimiento</th><th>Premios</th><th>Apellido</th><th>Acciones</th></tr>";
        while ($fila = $resultado->fetch_assoc()) {
            $autorID = $fila['ID'];
            $nombre = $fila['Nombre'];
            $nacionalidad = $fila['Nacionalidad'];
            $fechaNacimiento = $fila['FechaNacimiento'];
            $premios = $fila['Premios'];
            $apellido = $fila['Apellido'];

            echo "<tr>";
            echo "<td>$autorID</td>";
            echo "<td>$nombre</td>";
            echo "<td>$nacionalidad</td>";
            echo "<td>$fechaNacimiento</td>";
            echo "<td>$premios</td>";
            echo "<td>$apellido</td>";
            echo "<td><a href='?eliminar=$autorID'>Eliminar</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No se encontraron autores en la base de datos.";
    }

    $conn->close();
    ?>
  </table>
</body>
</html>


