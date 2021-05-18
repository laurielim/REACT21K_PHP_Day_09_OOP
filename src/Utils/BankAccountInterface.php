<?php


namespace App\Utils;


interface BankAccountInterface
{
    /**
     * @param int $amount contains the amount to be withdraw, non negative
     * @return bool
     */
    public function withdraw(int $amount): bool;

    /**
     * @param int $amount contains the amount to be withdrawn, non negative
     */
    public function deposit(int $amount):void;
}