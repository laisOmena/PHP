<?php


class Funcionario extends Pessoa
{
    private string $role;

    /**
     * Funcionario constructor.
     * @param string $cargo
     */
    public function __construct(string $role, string $name, Cpf $cpf)
    {
        parent::__construct($name, $cpf);
        $this->role = $role;

    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->validateHolderName($name);
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }


}