<?php

require_once 'src/Conta.php';
require_once 'src/Cliente.php';
require_once 'src/Cpf.php';

$Lais = new Cliente(new Cpf('123.456.789-10'), 'Laís');
$conta1 = new Conta($Lais);
$Arthur = new Cliente(new Cpf('987.654.321-10'), 'Arthur');
$conta2 = new Conta($Arthur);

$conta1->deposit(3000);
$conta1->transfer(50, $conta2);
$conta2->withdraw(25);

echo $conta1->getBalance() . PHP_EOL;
echo $conta1->getHolder() . PHP_EOL;
echo $conta2->getBalance() . PHP_EOL;
echo $conta2->getCpfHolder() . PHP_EOL;
echo Conta::getNumberAccount();