<?php

// Create a class Hello in the App namespace. It should have a method called hello which accepts a string. Don't overthink this one! It's more about the namespaces than the class.

namespace App;

class Hello
{

    private $string;

    public function hello($string)
    {

        return "Hello " . $string;

    }

}