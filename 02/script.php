<?php

    $tf = $_POST["tf"];
    $cd = $_POST["cd"];
    $pc = $_POST["pc"];

    $gasto = ($tf*365)*($cd/20)*$pc;

    echo "Dinheiro gasto: {$gasto}";

?>