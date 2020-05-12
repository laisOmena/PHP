<?php

$contasCorrentes = [
    12345678910 => ['titular' => 'Laís', 'saldo' => 5000],
    98765432100 => ['titular' => 'Arthur', 'saldo' => 5000],
    63473479812 => ['titular' => 'Flora', 'saldo' => 1500]
];

$contasCorrentes = sacar($contasCorrentes[12345678910], 500);

foreach ($contasCorrentes as $cpf => $conta){
     exibeMensagem($cpf . ' ' . $conta['titular'] . ' ' . $conta['saldo']);
}

function exibeMensagem($mensagem){
    echo $mensagem . PHP_EOL;
}

function sacar($valor, $conta){
    if($valor > $conta['saldo']){
        exibeMensagem('Saldo insuficiente');
    }else{
        $conta['saldo'] -= $valor;
        exibeMensagem('Saque realizado com sucesso');
    }
    return $conta;
}