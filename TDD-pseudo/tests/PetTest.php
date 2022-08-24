<?php

use PetShop\Pet;
use PHPUnit\Framework\TestCase;

// This test file is testing the Pet class functionality. 
class PetTest extends TestCase
{
    /** @test */
    public function it_returns_a_dog_as_a_type_of_pet()
    {
        $dog =  new Pet();
        $this->assertEquals("dog", $dog->animal_species);
    }

    /** @test */
    public function it_returns_a_brown_dog()
    {
        $brownDog = new Pet();
        $brownDog->color = "brown";
        $brownDog->animal_species = "dog";
        $this->assertEquals("brown", $brownDog->color);
    }
}
