<?php

namespace App;

class PrimeFactors
{
    public function generate($number)
    {
        // a little silly, but let's see where this goes
        // if($number>1){
        //     return [$number];
        // }

        // remember, with TDD we should write as little code as possible
        // to get the tests to pass. 
        // Start with simply returning an array
        // return [];

        // with '4', we now see we need to think harder about this. Let's go
        $factors = []; //because we need to return an array

        $divisor = 2; // we need to have a dynamic candidate because of rule two failure condition below

        // 1. is numb divisible by 2
        // 2. if true, divide by 2. if false, increase candidate and try again.
        // 3. repeat
        for ($divisor = 2; $number > 1; $divisor++) {
            for (; $number % $divisor === 0; $number /= $divisor) {
                $factors[] = $divisor;
            }
        }

        return $factors;
    }
}
