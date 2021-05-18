<?php


namespace App;

class Bank
{
    private array $accounts;

    public function __construct() {
        $this->accounts = [];
    }

    /**
     * @return array
     */
    public function getAccounts(): array
    {
        return $this->accounts;
    }

    /**
     * @param array $accounts
     */
    public function setAccounts(array $accounts): void
    {
        $this->accounts = $accounts;
    }

    public function addAccount(Account $newAccount): bool
    {
        $newAccountKey = $newAccount->getKey();
        $accounts = $this->getAccounts();
        foreach($accounts as $account) {
            if ($account->getKey()->equals($newAccountKey)) {
                return false;
            }
        }
        $accounts[] = $newAccount;
        $this->setAccounts($accounts);
        return true;
    }

    /**
     * Look under the array of accounts and return the account with the matching key if found
     * @param Key $key
     * @return Account|null
     */
    public function getAccountByKey(Key $key) : ?Account
    {
      /*  $accounts = $this->getAccounts();
        return $accounts[0];*/

      $accounts = $this->getAccounts();
        foreach($accounts as $account) {
            if ($account->getKey() == $key) {
                return $account;
            }
        }
        return null;
    }

    /**
     * Finds the account with a matching key and removes it from the array
     * @param Key $key
     */
    public function removeAccount(Account $accountToDelete): void {
        $key = $accountToDelete->getKey();
        $accounts = $this->getAccounts();
        foreach($accounts as $i => $account) {
            if ($account->getKey() == $key) {
                array_splice($accounts, $i, 1);
                $this->setAccounts($accounts);
            }
        }
    }
}