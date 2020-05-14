<?php


class Conta
{
    private $cpfHolder;
    private $nameHolder;
    private $balance;
    private static $numberAccount = 0;

    /**
     * Conta constructor.
     * @param string $cpfHolder
     * @param string $nameHolder
     */
    public function __construct(string $cpfHolder, string $nameHolder)
    {
        $this->cpfHolder = $cpfHolder;
        $this->nameHolder = $nameHolder;
        $this->validateHolderName($nameHolder);
        $this->balance = 0;

        self::$numberAccount++;
    }

    /**
     * subtraí o nùmero de contas, quando a instância é apagada
     */
    public function __destruct()
    {
        self::$numberAccount--;
    }

    /**
     * @return mixed
     */
    public function getCpfHolder()
    {
        return $this->cpfHolder;
    }

    /**
     * @return mixed
     */
    public function getNameHolder()
    {
        return $this->nameHolder;
    }

    /**
     * @return mixed
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @param $this
     * @param float $value
     */
    public function withdraw(float $value): void
    {
        if ($value > $this->balance){
            echo "saldo indisponível";
            return;
        }
        $this->balance -= $value;

    }

    /**
     * @param float $value
     */
    public function deposit(float $value): void
    {
        if ($value < 0){
            echo "Operação inválida";
            return;
        }
        $this->balance += $value;
    }

    /**
     * @param float $value
     * @param Conta $targetAccount
     */
    public function transfer(float $value, Conta $targetAccount): void
    {
        if ($value > $this->balance){
            echo "Saldo insuficiente";
            return;
        }
        $this->withdraw($value);
        $targetAccount->deposit($value);

    }

    /**
     * @param string $nomeTitular
     */
    private function validateHolderName(string $nomeTitular)
    {
        if(strlen($nomeTitular) < 5){
            echo "Nome inválido, insira sobrenome";
            exit();
        }
    }

    public static function getNumberAccount():int
    {
        return self::$numberAccount;
    }
}