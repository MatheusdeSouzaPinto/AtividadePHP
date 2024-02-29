<?php
    function calcularArea($area) {
        return pi() * $area * $area;
    }

    $area = 7;
    echo "A area do círculo e equivalente a:: " . calcularArea($area);
?>