<?php

require_once 'funcoes.php';

$contasCorrentes = [
    '123.456.789-10' => ['titular' => 'Laís', 'saldo' => 5000],
    '987.654.321-00' => ['titular' => 'Arthur', 'saldo' => 5000],
    '634.734.798-12' => ['titular' => 'Flora', 'saldo' => 1500]
];

$contasCorrentes['634.734.798-12'] = sacar(500, $contasCorrentes['634.734.798-12']);
$contasCorrentes['123.456.789-10'] = sacar(400, $contasCorrentes['123.456.789-10']);
$contasCorrentes['987.654.321-00'] = depositar($contasCorrentes['987.654.321-00'], 900);
nameBold($contasCorrentes['987.654.321-00']);

//remove variável da memória
unset($contasCorrentes['634.734.798-12']);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>

    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?=$conta['titular'] ?> - <?=$cpf; ?></h3>
        </dt>
        <dd>
            Saldo: <?=$conta['saldo']; ?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>
