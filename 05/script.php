<?php

    $tg = $_POST["tg"];
    $vm = $_POST["vm"];

    echo "Velocidade média: {$vm} km/h<br/>";
    echo "Tempo gasto na viagem: {$tg} h<br/>";
    echo "Distância percorrida: " . $dist = $vm * $tg . " km<br/>";
    echo "Litros utilizados na viagem: " . $dist/12 . " L";

?>