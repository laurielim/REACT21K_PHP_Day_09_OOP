<?php

namespace App\Controller;

use App\Account;
use App\Bank;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BankAccountController extends AbstractController
{
    #[Route('/bank/account', name: 'bank_account')]
    public function index(): Response
    {
        $bank = new Bank();

        $firstAcc = new Account(1000, 12345);
        $secondAcc = new Account(5000, 123);
        $thirdAcc = new Account(10000, 9999);

        $bank->addAccount($firstAcc);
        $bank->addAccount($secondAcc);
        $bank->addAccount($thirdAcc);

//      $resp = $bank->getAccountById(9999)->deposit(-1000); // illegal
//      $resp = $bank->getAccountById(9999)->deposit(1000);

//      $resp = $bank->getAccountById(123)->withdraw(-1000); // illegal
//      $resp = $bank->getAccountById(123)->withdraw(10000); // legal but not possible
        $resp = $bank->getAccountById(123)->withdraw(1000);

        return $this->json([
            'bank_id' => 123,
            'message' => $resp,
            'balance' => $bank->getAccountById(123)->getBalance(),
        ]);
    }
}
