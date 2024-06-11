<?php

namespace Unit\Service;

use App\Service\Greetings;
use PHPUnit\Framework\TestCase;

class GreetingsTest extends TestCase
{
    public function testGreet()
    {
        $greetings = new Greetings();

        $this->assertInstanceOf(Greetings::class, $greetings);

        $this->assertEquals('Hello there, Bob!', $greetings->greet('Bob'));
    }
}
