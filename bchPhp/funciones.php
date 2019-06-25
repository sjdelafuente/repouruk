<?php 


function mayor($n1, $n2, $n3) {
    echo max($n1, $n2, $n3);
}

function tabla($base, $limite) {
    $secuencia = [];
        for ($i = $base; $i <= $limite; $i++){
            $secuencia[] = $i;
        }      
     return $secuencia;
}

function mayor2($n1, $n2, $n3 = 100) {
    echo max($n1, $n2, $n3);
}

function tabla2($base, $limite = 100) {
    $secuencia2 = [];
        for ($i = $base; $i <= $limite; $i++) {
            $secuencia2[] = $i;
        }
    return $secuencia2;
}

?>

<html>
    <h1>Ejercicio 1</h1>

        <?='El numero mayor entre los 3 parametros es:' . ' ';?>
        <?=mayor(24, 34, 57);?>

    <h1>Ejercicio 2</h1>

        <?=print_r( tabla(5, 50), true );?>

    <h1>Ejercicio 3</h1>
        <?='El numero mayor entre los 3 parametros es:' . ' ';?>
        <?=mayor2(24, 34);?>

    <h1>Ejercicio 4</h1>

        <?=print_r( tabla2(25), true );?>

</html>




