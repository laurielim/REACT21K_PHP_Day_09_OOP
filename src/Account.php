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
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    public function deposit(int $amount)
    {
        if ($amount > 0) {

        }
    }

    public function withdraw(int $amount)
    {
        // Todo
    }
}