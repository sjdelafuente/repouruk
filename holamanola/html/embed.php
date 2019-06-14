<?php 
$nombre = 'KITCHENING'; 
$numeroGanador = rand(0,1);
$links = [
    'https://google.com' => 'Google',
    'https://facebook.com' =>  'Facebook',
    'https://twitter.com' => 'Twitter',
];
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>La Internet</h1>
    <marquee>Bienvenidos al mundo de la internet</marquee>
    <h2>Bienvenido a <?= $nombre ?></h2>
    <h3>¿Es usted un ganador?</h3>  
            <?php echo $numeroGanador == 1 ? 'SI' : 'NO'; ?> 
    <h3>Algunos sitios interesantes:</h3>
    <ul>
        <?php foreach ($links as $href => $name) : ?>
      <li>
        <a href="<?= $href ?>">
            <?= $name ?>
        </a>
      </li>
        <?php endforeach; ?>
    </ul>
  </body>
</html>
