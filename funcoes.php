<?php

function exibeMensagem(string $mensagem){
    echo $mensagem . "<br>";
}

function sacar(float $valor, array$contas): array
{
    if ($valor > $contas['saldo']) {
        exibeMensagem('Saldo insuficiente');
    } else {
        $contas['saldo'] -= $valor;
    }
    return $contas;
}

function depositar(array $conta, float $valor): array
{
    if ($valor > 0){
        $conta['saldo'] += $valor;
    }else{
        exibeMensagem("Operação negada");
    }
    return $conta;
}

function nameBold(array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
}

function exibeConta(array $conta){
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo</li>";
}