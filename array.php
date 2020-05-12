<?php

$idadeList = [19, 18, 23, 20, 25, 30, 21, 22, 19];

//$idadeLais = $idadeList[3];
//$idadeArthur = $idadeList[6];
//$idadeZoe = $idadeList[5];

list($idadeLais, , $idadeArthur, $idadeZoe) = $idadeList;

//adiciona na próxima posição vazia
$idadeList[] = 20;

for ($i=0; $i < count($idadeList); $i++){
    echo $idadeList[$i] . PHP_EOL;
}

echo "$idadeLais $idadeArthur $idadeZoe";