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
        $account = new Account(1000, 12345);

        $bank->addAccount($account);

        return $this->json([
            'bank_id' => 12345,
            'balance' => $bank->getAccountById(12345)->getBalance(),
        ]);
    }
}
