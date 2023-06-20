<!DOCTYPE html>
<html>
<head>
  <title>Registro de Préstamos de Libros</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <body bgcolor="61727C"></body>
  
</head>
<body>
  <form>
    <h1>Registro de Préstamos de Libros</h1>
    <label for="bookId">ID del libro:</label>
    <input type="text" id="bookId" name="bookId">

    <label for="loanDate">Fecha de préstamo:</label>
    <input type="date" id="loanDate" name="loanDate">

    <label for="returnDate">Fecha de devolución:</label>
    <input type="date" id="returnDate" name="returnDate">

    <input type="submit" value="Enviar">
    <input type="submit" value="Eliminar">
  </form>
</body>
</html>
