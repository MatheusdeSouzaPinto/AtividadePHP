<?php
    $num1 = 0;
    $num2 = 1;
    echo $num1 . " ";
    echo $num2 . " ";
    for ($i = 2; $i < 10; $i++) {
        $proximo = $num1 + $num2;
        echo " " . $proximo . " ";
        $num1 = $num2;
        $num2 = $proximo;
    }
?>