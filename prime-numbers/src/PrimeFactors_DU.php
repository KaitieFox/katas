<?php

namespace App;

class PrimeFactors_DU
{
    // we need
    // - a list of divisors!
    // - build the array as we go along
    // - parameter!
    public function prime_factorization($number) // $number = the big number that we are trying to find all the factors for!
    {
        $arrayOfFactors = [];
        $candidate = 2; // = the divisor, the factors! *candidate* for being a factor!
        do {
            if ($number % $candidate === 0) {
                $arrayOfFactors[] = $candidate;
                $number = $number / $candidate;
            } else {
                $candidate++;
            }
        } while ($number > 1);

        // for (; $number > 1; $candidate++) {
        //     if ($number % $candidate === 0) {
        //         $arrayOfFactors[] = $candidate;
        //         $number = $number / $candidate;
        //         $candidate--;
        //     }
        // }

        return $arrayOfFactors;
    }
}
