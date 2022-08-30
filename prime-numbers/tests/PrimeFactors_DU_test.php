<?php

use App\PrimeFactors_DU;
use PHPUnit\Framework\TestCase;

class PrimeFactors_DU_test extends TestCase
{
    /** @test 
     * @dataProvider factors
     */
    public function it_returns_the_prime_factorization_for_a_number($number, $expectedFactors)
    {
        $primeFactors = new PrimeFactors_DU(); //class
        $factors = $primeFactors->prime_factorization($number); //method or function
        $this->assertEquals($expectedFactors, $factors);
    }

    public function factors()
    {
        return [
            [1, []],
            [2, [2]],
            [3, [3]],
            [4, [2, 2]],
            [5, [5]],
            [6, [2, 3]],
            [8, [2, 2, 2]],
            [240, [2, 2, 2, 2, 3, 5]],
            [100, [2, 2, 5, 5]],
            [999, [3, 3, 3, 37]]
        ];
    }
}
