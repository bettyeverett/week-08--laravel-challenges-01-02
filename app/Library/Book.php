<?php

// Create a class Book in the App\Library namespace. It should take a title and its number of pages in the constructor. It should have a read() method, which takes a number of pages that have been read. It should also have a currentPage() page method which tells you which page you're currently on.

namespace App\Library;

class Book
{

    private $title;
    private $pages;
    private $pageNumber = 1;

    public function __construct($title, $pages)
    {

        $this->title = $title;
        $this->pages = $pages;

    }

    public function read($noOfPages)
    {

        $this->pageNumber += $noOfPages;
        return $this;

    }

    public function currentPage()
    {

        return $this->pageNumber;

    }

}