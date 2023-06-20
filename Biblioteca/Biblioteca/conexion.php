<?php

$servidor = 'localhost';
$usuario = 'root';
$contraseña = '';
$base_datos = 'biblioteca_libros';

try {
    $conexion = new PDO("mysql:host=$servidor;dbname=$base_datos", $usuario, $contraseña);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexion establecida";
} 
catch(PDOException $e) {
    echo 'Error de conexión: ' . $e->getMessage();
}
?>
