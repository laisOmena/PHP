<?php


class Pessoa
{
    protected string $name;
    private string $cpf;

    /**
     * Pessoa constructor.
     * @param string $name
     */
    public function __construct(string $name, Cpf $cpf)
    {
        $this->validateHolderName($name);
        $this->name = $name;
        $this->cpf = $cpf;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return Cpf|string
     */
    public function getCpf(): string
    {
        return $this->cpf->getNumber();
    }

    /**
     * @param string $name
     */
    protected function validateHolderName(string $name)
    {
        if(strlen($name) < 5){
            echo "Nome inválido, insira sobrenome";
            exit();
        }
    }


}