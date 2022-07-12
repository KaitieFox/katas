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

    /** @test */
    public function chop_class_loads()
    {
        $chop = new BinaryChop1;
    }
}
