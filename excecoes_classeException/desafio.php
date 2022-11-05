<?php

function divisao($numberA, $numberB){

    if($numberA == 0 || $numberB == 0){
        throw new Exception("Número preenchido com valor nulo!!\n");
    }

     return true;
}

$numberA = 10;
$numberB = 0;

$status = false;

try{
    $status = divisao($numberA, $numberB);
} catch ( Exception $s){
   echo $s->getMessage();
} finally {
    echo "Status da Operação: " . (int)$status;
    die();
}


