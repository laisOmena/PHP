<?php

require_once 'src/Conta.php';

$conta1 = new Conta('123.456.789-10', 'Laís');
$conta2 = new Conta('987.654.321-10', 'Arthur');

$conta1->deposit(300);
$conta1->transfer(50, $conta2);
$conta2->withdraw(25);

echo $conta1->getBalance() . PHP_EOL;
echo $conta2->getBalance() . PHP_EOL;
echo Conta::getNumberAccount();