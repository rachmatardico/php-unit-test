<?php

namespace Matt\PhpUnitTest;

use Exception;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;

class PersonTest extends TestCase
{
    private Person $person;

    protected function setUp():void
    {
        // $this->person = new Person("Rachmat");
    }

    /**
     * @before
     */
    public function createPerson()
    {
        $this->person = new Person("Rachmat");
    }

    public function testSuccess()
    {
        assertEquals("Hello Budi, my name is Rachmat", $this->person->sayHello("Budi"));
    }

    public function testException()
    {
        $this->expectException(Exception::class);
        $this->person->sayHello(null);
    }

    public function testGoodbyeSuccess()
    {
        $this->expectOutputString("Goodbye Budi" . PHP_EOL);
        $this->person->sayGoodbye("Budi");
    }
}