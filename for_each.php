<?php

$contasCorrentes = [
    12345678910 => ['titular' => 'Laís', 'saldo' => 5000],
    98765432100 => ['titular' => 'Arthur', 'saldo' => 5000],
    63473479812 => ['titular' => 'Flora', 'saldo' => 1500]
];

foreach ($contasCorrentes as $cpf => $conta){
    echo $cpf . ' = ' . $conta['titular'] . ' : ' . $conta['saldo'] . PHP_EOL;
}