<h1>Practica de PHP</h1>

<?php


$persona = [
    'nombre' => 'Jon',
    'apellido' => 'Snow',
    'edad' => 27,
    'hobbies' => [
        'Netflix', 'Futbol', 'Programar'
    ]
];
?>


<?php

// Agregar y/o Modificar datos en el Array.
$persona['direccion'] = 'Winterfell';
$persona['edad'] = 25;

// Agregar un nuevo elemento al Array Asociativo
$persona['hobbies'][] = 'Dibujo'; 

var_dump($persona);

echo '<br>';

// Ejercicio 1.

$var1 = 32;
$var2 = 24;

if ($var1 > $var2) {
    echo 'El numero mayor es' . ' ' . ($var1);
} else {
    echo 'El numero mayor es' . ' ' . ($var2);
}

echo '<br>';

// Ejercicio 2.

rand(1, 5);

$var3 = rand(1, 5);

if ($var3 == 3 || $var3 == 5) {
    echo 'El numero es' . ' ' . $var3;
} else {
    echo 'El numero generado no es ni 3 ni 5';
}

echo '<br>';

// Ejercicio 3.

if ($var3 != 3) {
    echo 'El numero NO es 3';
} else {
    echo 'El numero SI es:' . ' ' . $var3;
}

echo '<br>';

// Ejercicio 4.

rand(1, 100);

if (rand(1, 100) >= 50) {
    echo 'el numero es mayor a 50';
} else {
    echo 'el numero es menor a 50';
}

echo '<br>';

// Ejercicio 5 / 5a.

$nombreDeUsuario = 'admin';
$ContraseniaDeUsuario = '1234';

if ($nombreDeUsuario == 'admin' && $ContraseniaDeUsuario == '1234') {
    echo 'Bienvenido!';
} elseif ($nombreDeUsuario == 'admin' && $ContraseniaDeUsuario != '1234') {
    echo 'El Error esta en la contraseña.';
} elseif ($nombreDeUsuario == '' && $ContraseniaDeUsuario == '') {
    echo 'Debe completar los campos obligatorios';
} elseif ($nombreDeUsuario != 'admin') {
    echo 'El Error esta en el Usuario.';
}

echo '<br>';

// Ejercicio 6. / 6a.

$edad = 24;
$casado = false;
$sexo = ['Masculino', 'Femenino', 'Otro'];

if ($edad > 18 && $casado == false) {
    echo 'Bienvenido!';
} elseif ($edad > 18 && $casado == (true || false) && $sexo == 'Otro') {
    echo 'Bienvenido Chavale!';
}

echo '<br>';

// Ejercicio 7.

$cantidadDeAlumnos = 100;

if ($cantidadDeAlumnos) {
    echo "true";
} else {
    echo "false";
}

echo '<br>';

// Ejercicio 8.

$numero = 8;

if ($numero % 2 == 0) {
    echo 'El numero es par.';
} else {
    echo 'El numero es impar.';
}

echo '<br>';

// Ejercicio 9.

$nota = rand(0, 10);

switch ($nota < 4) {
    echo 'Desaprobado';
} elseif ($nota >= 4 && $nota <= 5)

?>