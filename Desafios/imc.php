<?php
$peso = 60;
$altura = 1.60;
$imc = $peso/($altura**2);
if ($imc < 19) echo "Abaixo do peso";
elseif ($imc <= 24) echo "Peso normal";
else echo "Acima do peso";