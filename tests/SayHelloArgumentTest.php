<?php

use PHPUnit\Framework\TestCase;

class SayHelloArgumentTest extends TestCase
{
    /**
     * @dataProvider positiveDataProvider
     */
    public function testPositive($input, $expected)
    {
        $this->assertEquals($expected, sayHelloArgument($input));
    }

    public function positiveDataProvider()
    {
        return [
            ['dude', 'Hello dude'],
            ['guys', 'Hello guys'],
            ['Pasha', 'Hello Pasha'],
            ['Ukraine', 'Hello Ukraine'],
        ];
    }
}