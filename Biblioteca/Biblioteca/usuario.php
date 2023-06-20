<!DOCTYPE html>
<html>
<head>
  <title>Usuarios</title>
  <link rel="stylesheet" type="text/css" href="eliminar.css">
  <body bgcolor="61727C"></body>
  
</head>
<body>
<center><img src="Imagenes\imagen para el proyecto.jpeg" alt=" "></center>
  <center><h2>Crear nuevo usuario</h2>
  <form action="" method="post">
    <center><label for="nombre">Nombre:</label></center>
    <center><input type="text" id="nombre" name="nombre" required><br></center>

    <center><label for="apellido">Apellido:</label></center>
    <center><input type="text" id="apellido" name="apellido" required><br></center>

    <center><label for="telefono">Teléfono:</label></center>
    <center><input type="text" id="telefono" name="telefono" required><br></center>

    <center><label for="correo">Correo:</label></center>
    <center><input type="email" id="correo" name="correo" required><br></center>

    <center><label for="direccion">Dirección:</label></center>
    <center><input type="text" id="direccion" name="direccion" required><br></center>

    <center><label for="documento">Documento:</label></center>
    <center><input type="text" id="documento" name="documento" required><br></center>

    <center><input type="submit" class="create-button" value="Crear" name="crear"></center>
  </form></center>

  <?php
  // Crear nuevo usuario
  if (isset($_POST['crear'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "biblioteca_libros";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $direccion = $_POST['direccion'];
    $documento = $_POST['documento'];

    $sql = "INSERT INTO usuarios (Nombre, Apellido, Telefono, Correo, Direccion, Documento)
            VALUES ('$nombre', '$apellido', '$telefono', '$correo', '$direccion', '$documento')";

    if ($conn->query($sql) === TRUE) {
      echo "Nuevo usuario creado correctamente";
    } else {
      echo "Error al crear el usuario: " . $conn->error;
    }

    $conn->close();
  }
  ?>

  <center><h2>Eliminar usuario</h2>
  <form action="" method="post">
    <center><label for="documento-eliminar">Documento del usuario:</label></center>
    <center><input type="text" id="documento-eliminar" name="documento_eliminar" required></center>
    <center><input type="submit" class="delete-button" value="Eliminar" name="eliminar"></center>
  </form></center>

  <?php
  // Eliminar usuario
  if (isset($_POST['eliminar'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "biblioteca_libros";

    $conn = new mysqli($servername, $username, $password, $dbname);
    $documento_eliminar = $_POST['documento_eliminar'];

    $sql = "DELETE FROM usuarios WHERE Documento = '$documento_eliminar'";

    if ($conn->query($sql) === TRUE) {
      echo "Usuario eliminado correctamente";
    } else {
      echo "Error al eliminar el usuario: " . $conn->error;
    }

    $conn->close();
  }
  ?>

  <center><h2>Buscar usuario</h2>
  <form action="" method="post">
    <center><label for="buscar-documento">Documento:</label></center>
    <center><input type="text" id="buscar-documento" name="buscar_documento" required></center>
    <center><input type="submit" class="search-button" value="Buscar" name="buscar"></center>
  </form></center>

  <?php
  // Buscar usuario
  if (isset($_POST['buscar'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "biblioteca_libros";

    $conn = new mysqli($servername, $username, $password, $dbname);
    $buscar_documento = $_POST['buscar_documento'];

    $sql = "SELECT * FROM usuarios WHERE Documento = '$buscar_documento'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      echo "<h3>Resultados de la búsqueda:</h3>";
      echo "<table><tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Teléfono</th><th>Correo</th><th>Dirección</th><th>Documento</th></tr>";
      while ($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row['ID']."</td><td>".$row['Nombre']."</td><td>".$row['Apellido']."</td><td>".$row['Telefono']."</td><td>".$row['Correo']."</td><td>".$row['Direccion']."</td><td>".$row['Documento']."</td></tr>";
      }
      echo "</table>";
    } else {
      echo "No se encontraron resultados.";
    }

    $conn->close();
  }
  ?>
</body>
</html>
