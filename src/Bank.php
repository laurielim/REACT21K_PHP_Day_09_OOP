<?php


namespace App;

class Bank
{
    private $accounts;

    public function __construct() {
        $this->accounts = [];
    }

    public function addAccount(Account $account)
    {
        $this->accounts[] = $account;
    }

    /**
     * @return array
     */
    public function getAccounts(): array
    {
        return $this->accounts;
    }

    /**
     * Look under the array of accounts and return the account with the matching id if found
     * @param int $accountId
     * @return Account|null
     */
    public function getAccountById(int $accountId) : ?Account
    {
      /*  $accounts = $this->getAccounts();
        return $accounts[0];*/

      $accounts = $this->getAccounts();
        foreach($accounts as $account) {
            if ($account->getId() == $accountId) {
                return $account;
            }
        }
        return null;
    }

}