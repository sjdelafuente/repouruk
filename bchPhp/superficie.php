<?php 

function triangulo($base, $altura) {
    echo $base * $altura;
}

function rectangulo($base, $altura) {
    echo $base * $altura;
}

function cuadrado($base, $altura) {
    echo $base * $altura;
}

function circulo($radio) {
    echo pi()*$radio*$radio;
}
?>

<html>
    <h1>Ejercicio 1</h1>
        <?='La superficie del triangulo es:' . ' '; ?>
        <?=triangulo(6,12);?> m2.
    <h1>Ejercicio 2</h1>
        <?='La superficie del rectangulo es:' . ' '; ?>
        <?=rectangulo(7,14);?> m2.
    <h1>Ejercicio 3</h1>
        <?='La superficie del cuadrado es:' . ' '; ?>
        <?=cuadrado(10,10);?> m2.
    <h1>Ejercicio 4</h1>
        <?='La superficie del circulo es:' . ' '; ?>
        <?=circulo(4);?> metros. 
</html>
<?php
echo '<br>';
?>
