<?php

    $funcionesEjecutadas = 0;
    

    require_once ("funciones.php"); 
    
    require_once ("superficie.php");

    echo '<br>';

    function radios($r1, $r2, $r3) {
        $radio = max($r1, $r2, $r3);
        return circulo($radio);
    }

    echo 'La superficie mayor de los circulos comparados es:' . ' ';
    echo radios(rand(0, 10), rand(10,20), rand(5,15));


?>