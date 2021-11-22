<?php
$usuario = $_POST['usuario'];
$edad = $_POST['edad'];

if ($usuario == "") {
    echo "El usuario no puede estar vacio";
    exit;
}

if ($edad == "") {
    echo "La edad no puede estar vacia";
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/formularios/estilos.css">
  <title>Resultados</title>
</head>

<body>
  <div class="resultados">
  <h1>Resultado</h1>
    <p>Usuario: <?php echo $usuario; ?></p>
    <p>Edad: <?php echo $edad; ?></p>
  </div>
</body>

</html>