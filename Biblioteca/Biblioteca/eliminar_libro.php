<!DOCTYPE html>
<html>
<head>
  <title>Eliminar/Modificar Libro</title>
  <link rel="stylesheet" type="text/css" href="eliminarli.css">
  <body bgcolor="61727C"></body>
</head>
<body>
<center><img src="Imagenes\imagen para el proyecto.jpeg" alt=" "></center>
  <h1>Eliminar/Modificar Libro</h1>
  <table>
    <tr>
      <th>ID</th>
      <th>Título</th>
      <th>AutorID</th>
      <th>Año de Publicación</th>
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

    function eliminarLibro($id) {
        global $conn;
        $sql = "DELETE FROM libros WHERE ID = $id";
        if ($conn->query($sql) === TRUE) {
            echo "El libro con ID $id ha sido eliminado correctamente.";
        } else {
            echo "Error al eliminar el libro: " . $conn->error;
        }
    }

    function modificarLibro($id, $titulo, $autorID, $anioPublicacion) {
        global $conn;
        $sql = "UPDATE libros SET Titulo = '$titulo', AutorID = $autorID, AnioPublicacion = $anioPublicacion WHERE ID = $id";
        if ($conn->query($sql) === TRUE) {
            echo "El libro con ID $id ha sido modificado correctamente.";
        } else {
            echo "Error al modificar el libro: " . $conn->error;
        }
    }

    if (isset($_GET['eliminar']) && !empty($_GET['eliminar'])) {
        $libroID = $_GET['eliminar'];
        eliminarLibro($libroID);
    }

    if (isset($_POST['modificar'])) {
        $libroID = $_POST['libroID'];
        $titulo = $_POST['titulo'];
        $autorID = $_POST['autorID'];
        $anioPublicacion = $_POST['anioPublicacion'];
        modificarLibro($libroID, $titulo, $autorID, $anioPublicacion);
    }

    if (isset($_POST['crear'])) {
        $titulo = $_POST['titulo'];
        $autorID = $_POST['autorID'];
        $anioPublicacion = $_POST['anioPublicacion'];
        $sql = "INSERT INTO libros (Titulo, AutorID, AnioPublicacion) VALUES ('$titulo', $autorID, $anioPublicacion)";
        if ($conn->query($sql) === TRUE) {
            echo "El libro ha sido creado correctamente.";
        } else {
            echo "Error al crear el libro: " . $conn->error;
        }
    }

    $sql = "SELECT * FROM libros";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Título</th><th>AutorID</th><th>Año de Publicación</th><th>Acciones</th></tr>";
        while ($fila = $resultado->fetch_assoc()) {
            $libroID = $fila['ID'];
            $titulo = $fila['Titulo'];
            $autorID = $fila['AutorID'];
            $anioPublicacion = $fila['AnioPublicacion'];

            echo "<tr>";
            echo "<td>$libroID</td>";
            echo "<td>$titulo</td>";
            echo "<td>$autorID</td>";
            echo "<td>$anioPublicacion</td>";
            echo "<td>";
            echo "<a href='?eliminar=$libroID'>Eliminar</a> | ";
            echo "<a href='#' onclick='mostrarFormulario($libroID,\"$titulo\",$autorID,$anioPublicacion)'>Cambiar</a>";
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No se encontraron libros en la base de datos.";
    }

    // Cerrar la conexión
    $conn->close();

    ?>

    <script type="text/javascript">
    function mostrarFormulario(libroID, titulo, autorID, anioPublicacion) {
        document.getElementById('libroID').value = libroID;
        document.getElementById('titulo').value = titulo;
        document.getElementById('autorID').value = autorID;
        document.getElementById('anioPublicacion').value = anioPublicacion;
        document.getElementById('formularioModificar').style.display = 'block';
    }
    </script>

    <div id="formularioModificar" style="display:none;">
        <h2>Modificar Libro</h2>
        <form method="post" action="">
            <input type="hidden" name="libroID" id="libroID" value="">
            <label>Título: </label>
            <input type="text" name="titulo" id="titulo" required><br><br>
            <label>AutorID: </label>
            <input type="text" name="autorID" id="autorID" required><br><br>
            <label>Año de Publicación: </label>
            <input type="text" name="anioPublicacion" id="anioPublicacion" required><br><br>
            <input type="submit" name="modificar" value="Modificar">
        </form>
    </div>

    

    </table>
</body>
</html>
