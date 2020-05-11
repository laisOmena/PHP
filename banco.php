<?php

$contasCorrentes = [
    12345678910 => ['titular' => 'Laís', 'saldo' => 5000],
    98765432100 => ['titular' => 'Arthur', 'saldo' => 5000],
    63473479812 => ['titular' => 'Flora', 'saldo' => 1500]
];

$contasCorrentes[12345678910]['saldo'] -= 500;

foreach ($contasCorrentes as $cpf => $conta){
     exibeMensagem($cpf . ' ' . $conta['titular'] . ' ' . $conta['saldo']);
}

function exibeMensagem($mensagem){
    echo $mensagem . PHP_EOL;
}

function sacar($valor, $contasCorrentes){
    if($valor > $contasCorrentes['saldo']){
        exibeMensagem('Saldo insuficiente');
    }else{
        $contasCorrentes['saldo'] -= $valor;
        exibeMensagem('Saque realizado com sucesso');
    }
}