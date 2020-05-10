<?php

for ($i = 1; $i < 16; $i++){
    if($i == 13) continue;
    echo "#$i" . PHP_EOL;
}
$cont = 1;
while ($cont <= 15){
    echo "$cont - \n";
    $cont += 1;
}