<?php

    $a = 70;
    $b = 50;
    $c = 0;

    function angulos_internos($a, $b){
        $c = 180 - ($a + $b);
        echo "El resultado es: " . $c;
    }

    angulos_internos($a, $b);
?>