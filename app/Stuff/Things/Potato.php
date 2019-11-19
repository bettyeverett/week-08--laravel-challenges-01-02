<?php

// Create a class Potato in the App\Stuff\Things namespace. It should have a water() and hasGrown() method. hasGrown() should return false until the Potato has been watered five or more times.

namespace App\Stuff\Things;

class Potato
{

    private $water = 0;

    public function water()
    {

        $this->water += 1;
        return $this;

    }

    public function hasGrown()
    {

        if($this->water >= 5) {
            return true;
        } else {
            return false;
        }

    }

}
