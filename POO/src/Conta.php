<?php


class Conta
{
    private $holder;
    private $balance;
    private static $numberAccount = 0;

    /**
     * Conta constructor.
     * @param string $holder
     */
    public function __construct(Cliente $holder)
    {
        $this->holder = $holder;
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
    public function getHolder()
    {
        return $this->holder->getName();
    }

    public function getCpfHolder(): string
    {
        return $this->holder->getCpf();
    }

    /**
     * @return mixed
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
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

    public static function getNumberAccount():int
    {
        return self::$numberAccount;
    }
}