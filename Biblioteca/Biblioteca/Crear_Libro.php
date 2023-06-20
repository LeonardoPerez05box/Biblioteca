
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biblioteca_libros";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


$titulo = $_POST['titulo'];
$autorID = $_POST['autor'];
$anioPublicacion = $_POST['anio'];

$sql = "INSERT INTO libros (Titulo, AutorID, AnioPublicacion) VALUES ('$titulo', '$autorID', '$anioPublicacion')";

if ($conn->query($sql) === TRUE) {
    echo "La película se creó correctamente.";
} else {
    echo "Error al crear la película: " . $conn->error;
}

$conn->close();
?>

