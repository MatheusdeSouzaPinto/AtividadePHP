<?php
    function adicao($num1, $num2) {
        return $num1 + $num2;
    }

    function subtracao($num1, $num2) {
        return $num1 - $num2;
    }

    function multiplicacao($num1, $num2) {
        return $num1 * $num2;
    }

    function divisao($num1, $num2) {
        if ($num2 == 0) {
            return "Divisão por zero não é permitida.";
        } else {
            return $num1 / $num2;
        }
    }

    echo "Soma: " . adicao(5, 3) . "<br>";
    echo "Subtração: " . subtracao(5, 3) . "<br>";
    echo "Multiplicação: " . multiplicacao(5, 3) . "<br>";
    echo "Divisão: " . divisao(5, 3) . "<br>";
?>