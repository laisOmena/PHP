<?php
//String
$nome = "Laís";
//Mostra o tipo do dado e o comprimento
var_dump($nome);
echo "<br>";
if(is_string($nome)):
    echo "É uma string";
else:
    echo "Não é uma string";
endif;

echo "<hr>";
//int
$idade = 13;
var_dump($idade);

echo "<hr>";
//array
$carros = array("Gol", "Uno", "Cadilac", "Maverick", "Camaro", 12);
var_dump($carros);
echo "<br>";
echo "<hr>";
//object
class Cliente {
    public $nome;
    public function atribuirNome($nome){
        $this->$nome = $nome;
    }
}
$cliente = new Cliente();
$cliente->atribuirNome("Laís");
var_dump($cliente);
echo "<br>";
if(is_object($cliente)):
    echo "É um object";
else:
    echo "Não é um object";
endif;




