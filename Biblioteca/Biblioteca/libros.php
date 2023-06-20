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
<header>
      <input type="text" name="search" class="search-input" placeholder="Buscar libros" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
      <input type="submit" value="Buscar">
      <a href="registrar.php" class="account-link">Mi Cuenta</a>
    </form>
  </div>
</header>
    <center><h1>LIBROS</h1></center>
    <br>
    <br>
    <br>
    <center><h2>GENERO NARRATIVO</h2></center>
    <br>
    <br>
  <div class="libro">
    <img src="Imagenes\100 años de soledad.jpeg" class="it">
    <h2>100 Años De Soledad</h2>
    <p>Autor: Gabriel García Márquez</p>
    <p>Id:1</p>
    <p>Año Publicación: 1967</p>
    <form method="POST" action="">
      <input type="hidden" name="delete_id" value="1">
      <input type="submit" value="Eliminar">
    </form>
  </div>
  <div class="libro">
    <img src="Imagenes\tokio blues.webp" class="it">
    <h2>Tokio Blues</h2>
    <p>Autor: Haruki Murakami</p>
    <p>Id: 2</p>
    <p>Año Publicación: 1987</p>
    <form method="POST" action="">
      <input type="hidden" name="delete_id" value="1">
      <input type="submit" value="Eliminar">
    </form>
  </div>
  <div class="libro">
    <img src="Imagenes\it.webp" class="it">
    <h2>It(eso)</h2>
    <p>Autor: Stephen King</p>
    <p>Id: 3</p>
    <p>Año Publicación: 1986</p>
    <form method="POST" action="">
      <input type="hidden" name="delete_id" value="1">
      <input type="submit" value="Eliminar">
    </form>
  </div>
  <div class="libro">
    <img src="Imagenes\harry potter.webp" class="it">
    <h2>Harry Potter</h2>
    <p >Autor: J. K. Rowling</p>
    <p>Id: 4</p>
    <p >Año 1997</p>
    <form method="POST" action="">
      <input type="hidden" name="delete_id" value="1">
      <input type="submit" value="Eliminar">
    </form>
  </div>
  <div class="libro">
    <img src="Imagenes\orgullo y prejuicio.jpg" class="it">
    <h2>Orgullo y Prejuicio</h2>
    <p>Autor: Jane Austen</p>
    <p>Id: 5</p>
    <p>Año Publicación: 1813</p>
    <form method="POST" action="">
      <input type="hidden" name="delete_id" value="1">
      <input type="submit" value="Eliminar">
    </form>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <center><h2>GENERO LIRICO</h2></center>
  <br>
  <br>
  <div class="libro">
    <img src="Imagenes\la ciudad y los perros.jpg" class="it">
    <h2>La Ciudad Y
      <br>
       Los Perros</h2>
    <p >Autor: Mario Vargas Llosa</p>
    <p>Id: 6</p>
    <p >Año Publicación: 1963</p>
    <form method="POST" action="">
      <input type="hidden" name="delete_id" value="1">
      <input type="submit" value="Eliminar">
    </form>
  </div>
  <div class="libro">
    <img src="Imagenes\1984.jpg" class="it">
    <h2>1984</h2>
    <p>Autor: George Orwell</p>
    <p>Id: 7</p>
    <p>Año Publicación: 1949</p>
    <form method="POST" action="">
      <input type="hidden" name="delete_id" value="1">
      <input type="submit" value="Eliminar">
    </form>
  </div>
  <div class="libro">
    <img src="Imagenes\cumbres borrascosas.jpg" class="it">
    <h2>Cumbres 
      <br>
      Borrascosas</h2>
    <p>Autor: Emily Brontë</p>
    <p>Id: 8</p>
    <p>Año Publicación: 1847</p>
    <form method="POST" action="">
      <input type="hidden" name="delete_id" value="1">
      <input type="submit" value="Eliminar">
    </form>
  </div>
  <div class="libro">
    <img src="Imagenes\las aventuras de tom.jpg" class="it">
    <h2>Las Aventuras De
      <br>
       Tom Sawyer</h2>
    <p>Autor: Mark Twain</p>
    <p>Id: 9</p>
    <p>Año Publicación: 1876</p>
    <form method="POST" action="">
      <input type="hidden" name="delete_id" value="1">
      <input type="submit" value="Eliminar">
    </form>
  </div>
  <div class="libro">
    <img src="Imagenes\la casa de los espiritus.jpg" class="it">
    <h2>La Casa De 
      <br>
      Los Espiritus</h2>
    <p>Autor: Isabel Allende</p>
    <p>Id: 10</p>
    <p>Año Publicación: 1982</p>
    <form method="POST" action="">
      <input type="hidden" name="delete_id" value="1">
      <input type="submit" value="Eliminar">
    </form>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <center><h2>GENERO NARRATIVO</h2></center>
  <br>
  <br>
  <div class="libro">
    <img src="Imagenes\el amor en los tiempos del colera.jpg" class="it">
    <h2>El Amor En Los
      <br>
       Tiempos De Colera</h2>
    <p>Autor: Gabriel García Márquez</p>
    <p>Id: 11</p>
    <p>Año Publicación: 1985</p>
    <form method="POST" action="">
      <input type="hidden" name="delete_id" value="1">
      <input type="submit" value="Eliminar">
    </form>
  </div>
  <div class="libro">
    <img src="Imagenes\harry potter la camara secreta.jpg" class="it">
    <h2>Harry Potter La
      <br>
       Camara Secreta</h2>
    <p>Autor: J. K. Rowling</p>
    <p>Id: 12</p>
    <p>Año Publicación: 1898</p>
    <form method="POST" action="">
      <input type="hidden" name="delete_id" value="1">
      <input type="submit" value="Eliminar">
    </form>
  </div>
  <div class="libro">
    <img src="Imagenes\norwegian wood.jpg" class="it">
    <h2>Norwegian Wood</h2>
    <p>Autor: Haruki Murakami</p>
    <p>Id: 13</p>
    <p>Año Publicación: 1987</p>
    <form method="POST" action="">
      <input type="hidden" name="delete_id" value="1">
      <input type="submit" value="Eliminar">
    </form>
  </div>
  <div class="libro">
    <img src="Imagenes\el resplandor.jpg" class="it">
    <h2>El Resplandor</h2>
    <p>Autor: Stephen King</p>
    <p>Id: 14</p>
    <p>Año Publicación: 1977</p>
    <form method="POST" action="">
      <input type="hidden" name="delete_id" value="1">
      <input type="submit" value="Eliminar">
    </form>
  </div>
  <div class="libro">
    <img src="Imagenes\sentido y sensibilidad.jpg" class="it">
    <h2>Sentido Y
      <br>
       Sensibilidad</h2>
    <p>Autor: Stephen King</p>
    <p>Id: 15</p>
    <p>Año Publicación: 1811</p>
    <form method="POST" action="">
      <input type="hidden" name="delete_id" value="1">
      <input type="submit" value="Eliminar">
    </form>
  </div>
  <br>
  <br>
  <br>
  <style>
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
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .libro {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .libro h2 {
            margin-top: 0;
        }
        </style>
  <?php
    // Datos de los libros
    require('conexion.php');
    $libros = array(
      array(
        'titulo' => 'el tunel',
        'autor' => 'Gabriel García Márquez',
        'id' => '1',
        'anio' => '1967'
      ),
      array(
        'titulo' => 'cien años de soledad',
        'autor' => 'Haruki Murakami',
        'id' => '2',
        'anio' => '1987'
      ),
      array(
        'titulo' => 'harry potter',
        'autor' => 'Stephen King',
        'id' => '3',
        'anio' => '1986'
      ),
      array(
        'titulo' => 'el exorcismo',
        'autor' => 'J.K.Rowling',
        'id' => '4',
        'anio' => '1997'
      ),
      array(
        'titulo' => 'la puerta',
        'autor' => 'Jane Austen',
        'id' => '5',
        'anio' => '1813'
      ),
    );
   
    function buscarLibros($libros, $termino) {
      $resultados = array();
      
      foreach ($libros as $libro) {
        if (strpos(strtolower($libro['titulo']), strtolower($termino)) !== false ||
            strpos(strtolower($libro['autor']), strtolower($termino)) !== false ||
            strpos(strtolower($libro['id']), strtolower($termino)) !== false ||
            strpos(strtolower($libro['anio']), strtolower($termino)) !== false) {
          $resultados[] = $libro;
        }
      }
      
      return $resultados;
    }
    
  
    if (isset($_GET['search'])) {
      $termino = $_GET['search'];
      $resultados = buscarLibros($libros, $termino);
      
      if (count($resultados) > 0) {
        echo '<h2>Resultados de la búsqueda:</h2>';
        echo '<table>';
        echo '<tr><th>Título</th><th>Autor</th><th>ID</th><th>Año de Publicación</th></tr>';
        
        foreach ($resultados as $libro) {
          echo '<tr>';
          echo '<td>' . $libro['titulo'] . '</td>';
          echo '<td>' . $libro['autor'] . '</td>';
          echo '<td>' . $libro['id'] . '</td>';
          echo '<td>' . $libro['anio'] . '</td>';
          echo '</tr>';
        }
        
        echo '</table>';
      } else {
        echo '<p>No se encontraron resultados para la búsqueda.</p>';
      }
      
    }
?>

  </body>
</html>