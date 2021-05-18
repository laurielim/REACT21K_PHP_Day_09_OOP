<?php

namespace App\Controller;

use App\Account;
use App\Bank;
use App\Key;
use App\MortgagePayment;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BankAccountController extends AbstractController
{
    #[Route('/bank/account', name: 'bank_account')]
    public function index(): Response
    {
        $bank = new Bank();

        $firstKey = new Key(12345);
        $firstAcc = new Account(1000, $firstKey);

        $secondKey = new Key(5678);
        $secondAcc = new Account(5000, $secondKey);

        $thirdKey = new Key(321);
        $thirdAcc = new Account(10000, $thirdKey);

        $bank->addAccount($firstAcc);
        $bank->addAccount($secondAcc);
        $bank->addAccount($thirdAcc);

//      $resp = $bank->getAccountById(9999)->deposit(-1000); // illegal
//      $resp = $bank->getAccountById(9999)->deposit(1000);

//      $resp = $bank->getAccountById(123)->withdraw(-1000); // illegal
//      $resp = $bank->getAccountById(123)->withdraw(10000); // legal but not possible
//      $resp = $bank->getAccountById(123)->withdraw(1000);

        $mortgagePayment = new MortgagePayment($firstAcc);
        $mortgagePayment->makePayment(500);
        $bank->removeAccount($firstAcc);
        $lookupAccount = $bank->getAccountByKey($thirdKey);




        return $this->json([
            'bank_id' => $thirdKey->getNumber(),
            'balance' => $lookupAccount->getBalance(),
        ]);
    }
}
