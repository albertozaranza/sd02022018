<?php

    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];

    $mf = (($n1*2) + ($n2*3))/5;

    echo "Média final: {$mf} </br>";

    echo "Situação: ";

    if($mf >= 7){
        echo "Aprovado";
    }else {
        if($mf >= 5 and $mf < 7){
            echo "Recuperação";
        }else {
            if($mf < 5){
                echo "Reprovado";
            }
        }
    }
?>