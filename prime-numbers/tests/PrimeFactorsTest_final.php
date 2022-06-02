<?php

use App\PrimeFactors;
use PHPUnit\Framework\TestCase;


class PrimeFactorsTest extends TestCase
{

    /** @test
     * @dataProvider factors
     */
    public function it_generates_prime_factors($number, $expectedResult)
    {
        $factors = new PrimeFactors;
        $this->assertEquals($expectedResult, $factors->generate($number));
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
            [100, [2, 2, 5, 5]],
            [999, [3, 3, 3, 37]]
        ];
    }

    // these tests below need refactoring!
    // let's add a dataprovider

    /** @test */
    public function it_generates_prime_factors_for_1()
    {
        // we write this before PrimeFactors even exists
        $factors = new PrimeFactors;
        // this already does a lot for our code! 
        // we know that 1 will not have prime factors, what shall we return?
        // we can therefore plan! let's return an array of factors, and then we will be able
        // to return an empty array.
        // we also can see that one method on this class will be called 'generate'
        // generate takes one argument - a number
        // and that will generate our prime factors
        $this->assertEquals([], $factors->generate(1));
    }

    /** @test */
    public function it_generates_prime_factors_for_2()
    {
        $factors = new PrimeFactors;
        $this->assertEquals([2], $factors->generate(2));
    }

    /** @test */
    public function it_generates_prime_factors_for_3()
    {
        $factors = new PrimeFactors;
        $this->assertEquals([3], $factors->generate(3));
    }

    /** @test */
    public function it_generates_prime_factors_for_4()
    {
        // this is where things get trickier! 
        // 4 is not a prime number, so returning the number back to itself is not the right path.
        $factors = new PrimeFactors;
        $this->assertEquals([2, 2], $factors->generate(4));
    }
}
