<?php

namespace Matt\PhpUnitTest;

use Exception;

class Person
{
    public function __construct(private string $name)
    {
    }

    public function sayHello(?string $name)
    {
        if ($name == null) Throw new Exception("Name is null");

        return "Hello $name, my name is $this->name";
    }

    public function sayGoodbye(?string $name):void
    {
        echo "Goodbye $name" . PHP_EOL;
    }
}