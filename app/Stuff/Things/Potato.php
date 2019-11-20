<?php

// Create a class Potato in the App\Stuff\Things namespace. It should have a water() and hasGrown() method. hasGrown() should return false until the Potato has been watered five or more times.

namespace App\Stuff\Things;

class Potato
{

    // Keeping track of watering
    private $water = 0;

    public function water()
    {
        // Adding 1 to the tracker property
        $this->water += 1;
        return $this;

    }

    public function hasGrown()
    {

        // if($this->water >= 5) {
        //     return true;
        // } else {
        //     return false;
        // }

        return $this->water >= 5; // Check if the potato has been watered 5 or more times and has grown.

    }

}
