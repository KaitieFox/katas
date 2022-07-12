<?php

namespace App;

class PrimeFactorsAlgorithm
{
    # objective:
    # return an array of prime factors for a number
    /**
     * is numb divisible by 2
     *if true, divide by 2. if false, increase candidate and try again.
     *repeat
     */

    public function findPrimeFactors($number)
    {
        $factors = [];

        while ($number > 1) {
            if ($number % 2 === 0) {
                $factors[] = 2;
                $number = $number / 2;
            } else {
                $factors[] = 3;
                $number = $number / 3;
            }
        }

        return $factors;
    }


    # it's gonna do something
    public function dividesByTwo($number)
    {
        return $number / 2;
    }
}
