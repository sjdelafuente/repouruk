<?php

// Ejercicio 1.

for ($i = 0; $i <= 10; $i++) {
    echo '2 x ' . $i . '=' . (2*$i) . ' ' . '<br>';
}

echo '<hr>';

// Ejercicio 2.

$numero = 100;

while ($numero >= 85) {
    echo $numero . '<br>';
    $numero--;
}

echo '<hr>';

// Ejercicio 3.

$contador = 1;

while ($contador <= 5) {
    echo $contador * 2 . '<br>';
    $contador++;
}

echo '<hr>';

// Ejercicio 4.

$cantidadDeTiros = 0;
$cantidadDeCaras = 0;

while ($cantidadDeCaras < 5) {
    $tirada = rand(0,1);
    $cantidadDeTiros++;
    if ($tirada == 1) {
        $cantidadDeCaras++;
        echo "⚈ ";
    } else {
        echo "◯ ";

    }

}
echo "<br>";

echo "Tire la moneda $cantidadDeTiros veces para que salga $cantidadDeCaras veces cara.";

echo '<hr>';

// Ejercicio 5.

$nombres = ["manolo", "ricky", "charly", "willy", "pepe"];

for ($i = 0; $i < count($nombres); $i++) {
    echo $nombres[$i] . '<br>';
}

echo "<br>";

$i = 0;

while ($i < count($nombres)) {
    echo $nombres[$i] . '<br>';
    $i++;
}

echo "<br>";

$i = 0;

do {
    echo $nombres[$i] . '<br>';
    $i++;
} while ($i < count($nombres));

echo "<br>";

foreach ($nombres as $nombre) {
    echo $nombre . '<br>';
}

echo '<hr>';

// Ejercicio 6.

$numeros = [];

for ($i = 0; $i < 10; $i++) {
    $numeros[] = rand(0, 10);
    echo $numeros[$i] . ' ';
}

foreach ($numeros as $n) {
    if ($n == 5) {
        echo 'Se encontro un 5!';
        break;
    }
}



?>