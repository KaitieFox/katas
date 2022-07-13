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
}
