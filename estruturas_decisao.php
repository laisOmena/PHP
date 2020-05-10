<?php

$idade = 17;
$numPeole = 2;

if ($idade >= 18 ){
    echo "Você tem $idade anos. Pode entrar!";
}elseif ($idade >= 16 && $numPeole > 1){
    echo "Você tem $idade anos, mas está acompanhado por $numPeole. Pode entrar!";
} else{
    echo "Você só tem $idade anos. Você não pode entrar";
}
echo PHP_EOL;
$nome = "Alí";

$msg = $nome == "Laís"? "Você é a $nome. É quem eu estava esperando!" : "Você é $nome. Não é quem eu estava esperando!";
echo $msg;
echo PHP_EOL;
echo "Adeus";
?>