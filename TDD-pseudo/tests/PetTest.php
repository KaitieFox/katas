<?php

use PetShop\Pet;
use PHPUnit\Framework\TestCase;

// This test file is testing the Pet class functionality. 
class PetTest extends TestCase
{
    /** @test */
    public function it_returns_a_dog_as_a_type_of_pet()
    {
        $dog =  new Pet("dog");
        $this->assertEquals("dog", $dog->animal_species);
    }

    /** @test */
    public function it_returns_a_cat_as_a_type_of_pet()
    {
        $cat =  new Pet("cat");
        $this->assertEquals("cat", $cat->animal_species);
    }

    /** @test */
    public function it_returns_a_bird_as_a_type_of_pet()
    {
        $bird =  new Pet("bird");
        $this->assertEquals("bird", $bird->animal_species);
    }

    /** @test */
    public function it_sleeps()
    {
        $pet = new Pet("hamster");
        $this->assertEquals("This pet is asleep!", $pet->sleeps());
    }

    /** @test */
    public function it_wakes()
    {
        $pet = new Pet("hamster");
        $this->assertEquals("This pet is awake!", $pet->wake_up());
    }

    /** @test */
    public function it_is_adopted()
    {
        $pet = new Pet("goldfish");
        $this->assertEquals(false, $pet->is_adopted);
        $pet->adopt();
        $this->assertEquals(true, $pet->is_adopted);
        // what do we want this to do?
        // adopt will change the status of an animal
        // from not adopted to adopted
        // adopted status can either be true or false, therefore a *boolean*
        // need: is_adopted as an attribute. & ->adopt()

    }
}
