<?php

// Create a class Library. It should have an addShelf() method, which takes a Shelf object. It should have a titles() method that lists all the titles of all the books on all the shelves in the library.

namespace App\Library;

class Library
{

    private $shelves = [];

    public function addShelf(Shelf $shelf)
    {

        $this->shelves[] = $shelf;
        return $this;

    }

    public function titles()
    {

        $titles = [];

        foreach($this->shelves as $shelf) {
            $titles = array_merge($titles, $shelf->titles());
        }

        return $titles;

    }

}