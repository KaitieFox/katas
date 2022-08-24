<?php

use Karate\BinaryChop1;
use PHPUnit\Framework\TestCase;

class BinaryChop1Test extends TestCase
{
    /** @test */
    public function it_passes()
    {
        $this->assertEquals(true, true);
    }

    public function arrays()
    {
        return [
            [1, 2, 3, 4, 5, 6, 7, 8, 9, 0]
        ];
    }

    /** @test */
    public function it_chops_an_array_in_half()
    {
        $chop = new BinaryChop1;
        $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
        $choppedArrays = $chop->halveArray($arr);
        $expected = count($arr) / 2;
        $actual = count($choppedArrays[0]);

        $this->assertEquals($expected, $actual);
    }

    /** @test*/
    public function it_returns_the_position_of_3_in_the_array()
    {
        $chop = new BinaryChop1;
        $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
        $search = 3;
        $actual = $chop->search($arr, $search);

        $this->assertSame(2, $actual);
    }

    /** @test */
    public function it_does_not_try_to_half_an_array_with_one_item()
    {
        $chop = new BinaryChop1;
        $arr = [2];
        $actual = $chop->halveArray($arr);
        $expected = [2];

        $this->assertSame($expected, $actual);
    }

    /** @test */
    public function it_splits_an_array_that_has_an_odd_number_of_values()
    {
        $chop = new BinaryChop1;
        $arr = [1, 2, 3, 4, 5];
        [$actual1, $actual2] = $chop->halveArray($arr);
        $expected1 = 2;
        $expected2 = 3;
        $this->assertSame($expected1, count($actual1));
        // $this->assertSame($expected2, count($actual2));
    }
}
