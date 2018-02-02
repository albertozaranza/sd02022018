<?php

    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $quant = 0;
    $soma = 0;

    if($n2 > $n1){
        for($i = $n1; $i <= $n2; $i++){
            $soma += $i;
            $quant++;
        }
        echo "Média dos números do intervalo, incluindo os números digitados: " . $soma/$quant;
    }else {
        if($n1 > $n2){
            for($i = $n2; $i <= $n1; $i++){
                if($i%2==0){
                    $quant++;
                }
            }
            echo "Quantidade de números pares, incluindo os números digitados: " . $quant;
        }else {
            echo "Números iguais";
        }
    }
?>