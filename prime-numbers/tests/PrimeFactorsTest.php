<?php

use App\PrimeFactorsAlgorithm;
use PHPUnit\Framework\TestCase;

// This test file is testing the PrimeFactors class functionality. 
class PrimeFactorsTest extends TestCase
{
    # Test Cases
    # objective:
    # return an array of prime factors for a number

    /** @test */
    public function it_returns_prime_factors_for_four()
    {
        $algorithm = new PrimeFactorsAlgorithm;
        $actual = $algorithm->findPrimeFactors(4);
        $this->assertEquals([2, 2], $actual);
    }

    /** @test */
    public function it_returns_prime_factors_for_six()
    {
        $algorithm = new PrimeFactorsAlgorithm;
        $actual = $algorithm->findPrimeFactors(6);
        $this->assertEquals([2, 3], $actual);
    }

    /** @test */
    public function it_returns_prime_factors_for_eight()
    {
        $algorithm = new PrimeFactorsAlgorithm;
        $actual = $algorithm->findPrimeFactors(8);
        $this->assertEquals([2, 2, 2], $actual);
    }

    /** @test */
    public function it_divides_by_two_for_input_four()
    {
        $factor = new PrimeFactorsAlgorithm;
        $actual = $factor->dividesByTwo(4);
        $this->assertEquals(2, $actual);
    }

    /** @test */
    public function it_divides_by_two_for_input_6()
    {
        $factor = new PrimeFactorsAlgorithm;
        $actual = $factor->dividesByTwo(6);
        $this->assertEquals(3, $actual);
    }
}
