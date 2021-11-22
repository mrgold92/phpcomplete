<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
  <link rel="stylesheet" href="/formularios/estilos.css">
</head>
<body>

  <form action="comprobar.php" method="post" class="formulario">
  <h1>Formulario</h1>
    <div class="capa">
      <label for="usuario">Usuario:</label>
      <input type="text" name="usuario" id="usuario" class="input-usuario">
    </div>
    <div class="capa">
      <label for="edad">Edad:</label>
      <input type="text" name="edad" id="edad" class="input-edad">
    </div>

    <div class="capa">
      <input type="submit" value="Enviar" class="boton">
    </div>
    
  </form>
  
  
</body>
</html>