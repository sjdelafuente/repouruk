<?php

$file = 'usuarios.json';

if($_POST) { 

// ACA SE DEBEN VALIDAR LOS DATOS.

$hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$user = [
    
    "user" => $_POST["nombre"],
    "email" => $_POST["email"],
    "edad" => $_POST["edad"],
    "rol" => $_POST["rol"],
    "password" => $hash,
    
];

// me traigo todos los usuarios del archivo JSON
$usersJSON = file_get_contents($file);
// los cambio a un array de php porque no puedo trabajar en json
$usersArray = json_decode($usersJSON);
// le agrego al array el usuario del formulario
$usersArray[] = $user;
// lo guardo en formato json
$usersJSON = json_encode($usersArray);
// lo guardo en el archivo json
file_put_contents($file, $usersJSON, JSON_PRETTY_PRINT);

}




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
