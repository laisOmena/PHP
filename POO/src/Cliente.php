<?php


class Cliente
{
    private $cpf;
    private $name;

    public function __construct(Cpf $cpf, string $name)
    {
        $this->cpf = $cpf;
        $this->validateHolderName($name);
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getCpf(): string
    {
        return $this->cpf->getNumber();
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    private function validateHolderName(string $name)
    {
        if(strlen($name) < 5){
            echo "Nome inválido, insira sobrenome";
            exit();
        }
    }
}