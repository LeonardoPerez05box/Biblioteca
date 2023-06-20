<!DOCTYPE html>
<html>
<head>
  <title>Libros</title>
  <link rel="stylesheet" type="text/css" href="estilos.css">
  <body bgcolor="61727C"></body>

</head>
<div class="search-container">
    <form method="GET" action="">
      <header>
    <a href="informacion.php" class="account-link">HOME</a>
</header>
<body>
  <header>
<div class="search-container">
    <form method="GET" action="buscar_autor.php">
      <input type="text" name="search" class="search-input" placeholder="Buscar autor">
      <input type="submit" value="Buscar">
      <a href="registrar.php" class="account-link">Mi Cuenta</a>
  
    </form>
  </div>
</header>
    <center><h1>AUTORES</h1></center>
    <br>
    <br>
    <br>
    <center><h2>GENERO NARRATIVO</h2></center>
    <br>
    <br>
  <div class="autor">
    <img src="Imagenes\gabriel garcia.jpg" class="it">
    <h2>ID:1</h2>
    <p>Nombre: Gabriel García Márquez</p>
    <p>Apellido: García Márquez</p>
    <p>Nacionalidad: Colombiano</p>
    <p>Premios: Premio Nobel de Literatura</p>
    <p>FechaNacimiento: 1927-03-06</p>

  </div>
  <div class="autor">
    <img src="Imagenes\j.k rolling.jpg" class="it">
    <h2>ID:2</h2>
    <p>Nombre: J.K Rowling</p>
    <p>Apellido: Rowling</p>
    <p>Nacionalidad: Británica</p>
    <p>Premios: Premios Hans Christian Andersen</p>
    <p>FechaNacimiento: 1965-07-31</p>

  </div>
  <div class="autor">
    <img src="Imagenes\haruki.jpg" class="it">
    <h2>ID:3</h2>
    <p>Nombre: Haruki Murakami</p>
    <p>Apellido: Murakami</p>
    <p>Nacionalidad: Japonés</p>
    <p>Premios: Premios Franz Kafka</p>
    <p>FechaNacimiento: 1949-01-12</p>

  </div>
  <div class="autor">
    <img src="Imagenes\stephen king.jpg" class="it">
    <h2>ID:4</h2>
    <p>Nombre: Stephen King</p>
    <p>Apellido: King</p>
    <p>Nacionalidad: Estadounidense</p>
    <p>Premios: Premios Medalla Nacional
      <br>
       de las Artes</p>
    <p>FechaNacimiento: 1947-09-21</p>

  </div>
  <div class="autor">
    <img src="Imagenes\jane austen.jpg" class="it">
    <h2>ID:5</h2>
    <p>Nombre: Jane Austen</p>
    <p>Apellido: Austen</p>
    <p>Nacionalidad: Británica</p>
    <p>Premios: Ninguo</p>
    <p>FechaNacimiento: 1775-12-16</p>

  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <center><h2>GENERO LIRICO</h2></center>
  <br>
  <br>
  <div class="autor">
    <img src="Imagenes\marios vargas llosa.jpg" class="it">
    <h2>ID:6</h2>
    <p>Nombre: Mario Vargas Llosa</p>
    <p>Apellido: Vargas Llosa</p>
    <p>Nacionalidad: Peruano</p>
    <p>Premios: Premio Nobel de Literatura</p>
    <p>FechaNacimiento: 1936-03-28</p>

  </div>
  <div class="autor">
    <img src="Imagenes\geroge orwell.jpg" class="it">
    <h2>ID:7</h2>
    <p>Nombre: George Orwell</p>
    <p>Apellido: Orwell</p>
    <p>Nacionalidad: Británico</p>
    <p>Premios: Ninguno</p>
    <p>FechaNacimiento: 1903-06-25</p>

  </div>
  <div class="autor">
    <img src="Imagenes\emily bronte.jpg" class="it">
    <h2>ID:8</h2>
    <p>Nombre: Emily Bronte</p>
    <p>Apellido: Bronte</p>
    <p>Nacionalidad: Británica</p>
    <p>Premios: Ninguno</p>
    <p>FechaNacimiento: 1818-07-30</p>

  </div>
  <div class="autor">
    <img src="Imagenes\mark twain.jpg" class="it">
    <h2>ID:9</h2>
    <p>Nombre: Mark Twain</p>
    <p>Apellido: Twain</p>
    <p>Nacionalidad: Británico</p>
    <p>Premios: Ninguno</p>
    <p>FechaNacimiento: 1835-11-30</p>

  </div>
  <div class="autor">
    <img src="Imagenes\isabel allende.jpg" class="it">
    <h2>ID:10</h2>
    <p>Nombre: Isabel Allende</p>
    <p>Apellido: Allende</p>
    <p>Nacionalidad: Chilena</p>
    <p>Premios: Premio Nacional de Literatura de Chile</p>
    <p>FechaNacimiento: 1942-08-02</p>

    <style>
    body {
      background-color: #61727C;
      font-family: Arial, sans-serif;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }

    .search-container {
      text-align: center;
      margin-bottom: 20px;
    }

    .search-input {
      padding: 8px;
      width: 300px;
      font-size: 16px;
    }

    .search-button {
      padding: 8px 16px;
      font-size: 16px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      cursor: pointer;
    }

    .search-button:hover {
      background-color: #45a049;
    }

    .table-container {
      margin-top: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #4CAF50;
      color: #fff;
    }

    td {
      background-color: #f2f2f2;
    }

    .no-results {
      text-align: center;
      margin-top: 20px;
    }
  </style>
  </div>
  <?php
  

  if (isset($_GET['search'])) 
    $search = $_GET['search'];

    
    $autores = array(
      array(
        'id' => 1,
        'nombre' => 'Gabriel García Márquez',
        'apellido' => 'García Márquez',
        'nacionalidad' => 'Colombiano',
        'premios' => 'Premio Nobel de Literatura',
        'fechaNacimiento' => '1927-03-06'
      ),
      array(
        'id' => 2,
        'nombre' => 'J.K Rowling',
        'apellido' => 'Rowling',
        'nacionalidad' => 'Británica',
        'premios' => 'Premio Hans Christian Ardersen',
        'fechaNacimiento' => '1965-07-31'
      ),
      array(
        'id' => 3,
        'nombre' => 'Haruki Murakami',
        'apellido' => 'Murakami',
        'nacionalidad' => 'Japonés',
        'premios' => 'Franz Kafka',
        'fechaNacimiento' => '1949-01-12'
      ),
      array(
        'id' => 4,
        'nombre' => 'Stephen King',
        'apellido' => 'King',
        'nacionalidad' => 'Estadounidense',
        'premios' => 'Premio Medalla Nacional de las Artes',
        'fechaNacimiento' => '1947-09-21'
      ),
      array(
        'id' => 5,
        'nombre' => 'Jane Austen',
        'apellido' => 'Austen',
        'nacionalidad' => 'Británica',
        'premios' => 'Ninguno',
        'fechaNacimiento' => '1775-12-16'
      ),
      array(
        'id' => 6,
        'nombre' => 'Mario Vargas Llosa',
        'apellido' => 'Vargas Llosa',
        'nacionalidad' => 'Peruano',
        'premios' => 'Premio Nobel de Literatura',
        'fechaNacimiento' => '1936- 03-28'
      ),
      array(
        'id' => 7,
        'nombre' => 'George Orwell',
        'apellido' => 'Orwell',
        'nacionalidad' => 'Británico',
        'premios' => 'Ninguno',
        'fechaNacimiento' => '1903-06-25'
      ),
      array(
        'id' => 8,
        'nombre' => 'Emily Bronte',
        'apellido' => 'Bronte',
        'nacionalidad' => 'Británica',
        'premios' => 'Ninguno',
        'fechaNacimiento' => '1818-07-30'
      ),
      array(
        'id' => 9,
        'nombre' => 'Mark Twain',
        'apellido' => 'Twain',
        'nacionalidad' => 'Británico',
        'premios' => 'Ninguno',
        'fechaNacimiento' => '1936- 03-28'
      ),
      array(
        'id' => 10,
        'nombre' => 'Isabel Allende',
        'apellido' => 'Allende',
        'nacionalidad' => 'Chilena',
        'premios' => 'Premio Nacional de Literatura de chile',
        'fechaNacimiento' => '1942-08-02'
      ),
      
    );

    $resultados = array_filter($autores, function($autor) use ($search) {
        return stripos($autor['nombre'], $search) !== false ||
               stripos($autor['apellido'], $search) !== false;
    });

    if (empty($resultados)) {
        echo '<p>No se encontraron resultados para la búsqueda: ' . htmlspecialchars($search) . '</p>';
    } else {
        echo '<table>';
        echo '<tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Nacionalidad</th><th>Premios</th><th>Fecha de Nacimiento</th></tr>';
        foreach ($resultados as $resultado) {
            echo '<tr>';
            echo '<td>' . $resultado['id'] . '</td>';
            echo '<td>' . $resultado['nombre'] . '</td>';
            echo '<td>' . $resultado['apellido'] . '</td>';
            echo '<td>' . $resultado['nacionalidad'] . '</td>';
            echo '<td>' . $resultado['premios'] . '</td>';
            echo '<td>' . $resultado['fechaNacimiento'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }

?>
  </body>
</html>
  