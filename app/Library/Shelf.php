<?php

// Create a Shelf class. It should have an addBook() method which gets passed a Book. It should also have a titles() method, which lists the titles of all the books on the shelf.

namespace App\Library;

class Shelf
{

    private $booksOnShelf = [];

    public function addBook(Book $book)
    {

        $this->booksOnShelf[] = $book;
        return $this;

    }

    public function titles()
    {

        $titles = array_map(function($book) {
            return $book->title();
        }, $this->booksOnShelf);

        return $titles;

    }

}
