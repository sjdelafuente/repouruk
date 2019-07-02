<?php





?>




<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Registro de Usuario</title>
    <meta name="description" content="Roughly 155 characters">
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="script.js"></script>
  </head>
  <body>
        <form action="register.php" method="post">
        <div>
            Nombre: <input name="nombre" type="text" required/> 
        </div> 
        <div>
            Email: <input name="email" type="email" required/> 
        </div>
        <div>
            Edad: <input name="edad" type="text" required/> 
        </div>
        <div>
            Especifique su rol: <select name="rol">
                <option value="host">Host</option>
                <option value="helper">Helper</option>
            </select>
        </div>
        <div>
            Contraseña: <input name="password" type="password" required/> 
        </div>
        <div>
            <button>Enviar</button>
        </div>
        </form>
  </body>
</html>
