<?php


namespace App;


use App\Utils\BankAccountInterface;
use App\Utils\KeyInterface;

class Account implements BankAccountInterface
{
    private int $balance;
    private KeyInterface $key;

    public function __construct(int $balance,KeyInterface $key) {
        $this->balance = $balance;
        $this->key = $key;
    }

    /**
     * @return int
     */
    public function getBalance(): int
    {
        return $this->balance;
    }

    /**
     * @return KeyInterface
     */
    public function getKey(): KeyInterface
    {
        return $this->key;
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
            $newBalance = $this->getBalance() + $amount;
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
        if ($amount > 0 && $amount < $this->getBalance()) {
            $newBalance = $this->getBalance() - $amount;
            $this->setBalance($newBalance);
            return  true;
        } else {
            return false;
        }

    }


}