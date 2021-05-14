<?php


namespace App;


class Account
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
     * @return string
     */
    public function deposit(int $amount)
    {
        if ($amount < 0) {
            return 'Cannot deposit negative numbers';
        } else {
            $current = $this->getBalance();
            $newBalance = $current + $amount;
            $this->setBalance($newBalance);
            return strval($amount) . '€ deposited successfully.';
        }
    }

    /**
     * Subtract amount from balance
     * @param int $amount
     * @return string
     */
    public function withdraw(int $amount): string
    {
        if ($amount < 0) {
            return 'Cannot withdraw negative numbers';
        } elseif ($amount > $this->getBalance()) {
            return 'Insufficient funds';
        } else {
            $current = $this->getBalance();
            $newBalance = $current - $amount;
            $this->setBalance($newBalance);
            return  strval($amount) . '€ withdrawn.';
        }
    }


}