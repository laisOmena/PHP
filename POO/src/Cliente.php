<?php


class Cliente extends Pessoa
{
    private string $address;

    public function __construct(Cpf $cpf, string $name, Endereco $address)
    {
        parent::__construct($name, $cpf);
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

}