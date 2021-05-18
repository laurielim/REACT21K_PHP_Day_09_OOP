<?php


namespace App\Utils;


use App\Key;

interface KeyInterface
{
    /**
     * @param Key $sampleKey
     * @return bool
     */
    public function equals(Key $sampleKey): bool;


}