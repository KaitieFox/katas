<?php

namespace PetShop;

class Pet
{
    public $animal_species;
    public $is_adopted;

    public function __construct($animal_species)
    {
        $this->animal_species = $animal_species;
        $this->is_adopted = false;
    }

    public function sleeps()
    {
        return "This pet is asleep!";
    }

    public function wake_up()
    {
        return "This pet is awake!";
    }

    public function adopt()
    {
        return $this->is_adopted = true;
    }
}
