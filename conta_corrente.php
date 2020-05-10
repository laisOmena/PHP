<?php

$conta1 = ['titular' => 'Laís', 'saldo' => 5000];
$conta2 = ['titular' => 'Arthur', 'saldo' => 5000];
$conta3 = ['titular' => 'Flora', 'saldo' => 1500];
$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}
