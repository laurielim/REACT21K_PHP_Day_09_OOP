<?php


namespace App;


use App\Utils\KeyInterface;

class Key implements KeyInterface
{

    private int $bankId;

    public function __construct(int $bankId) {
        $this->bankId = $bankId;
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->bankId;
    }

    public function equals(Key $sampleKey): bool
    {
        return $sampleKey->getNumber() === $this->getNumber();
    }
}