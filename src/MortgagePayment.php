<?php


namespace App;


use App\Utils\BankAccountInterface;

class MortgagePayment
{
    private BankAccountInterface $bankAccount;

    public function __construct(BankAccountInterface $account) {
        $this->$bankAccount = $account;
    }

    public function makePayment(int $amount): void {
        $sufficientFund = $this->$bankAccount->withdraw($amount);

        if ($sufficientFund) {
            echo 'Payment has been made';
        } else {
            echo 'Insufficient fund';
        }
    }

}