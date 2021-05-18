<?php


namespace App;


use App\Utils\BankAccountInterface;

class Account implements BankAccountInterface
{
    private int $balance;
    private int $id;

    public function __construct($balance, $id) {
        $this->balance = $balance;
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getBalance(): int
    {
        return $this->balance;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $balance
     */
    public function setBalance(int $balance): void
    {
        $this->balance = $balance;
    }

    /**
     * Add amount to balance
     * @param int $amount
     */
    public function deposit(int $amount): void
    {
        if ($amount > 0) {
            $current = $this->getBalance();
            $newBalance = $current + $amount;
            $this->setBalance($newBalance);
        }
    }

    /**
     * Subtract amount from balance
     * @param int $amount
     * @return bool
     */
    public function withdraw(int $amount): bool
    {
        if ($amount < 0) {
            return false;
        } elseif ($amount > $this->getBalance()) {
            return false;
        } else {
            $current = $this->getBalance();
            $newBalance = $current - $amount;
            $this->setBalance($newBalance);
            return  true;
        }
    }


}