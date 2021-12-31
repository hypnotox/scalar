<?php

namespace Tests;

use HypnoTox\Scalars\StringObject;

class StringObjectTest extends BaseTest
{
    private function getTestObject(): StringObject
    {
        return new StringObject('test');
    }

    public function testCanConstruct(): void
    {
        $string = $this->getTestObject();

        $this->assertInstanceOf(StringObject::class, $string);
    }

    public function testCanGetValue()
    {
        $string = $this->getTestObject();

        $this->assertSame('test', $string->getValue());
    }

    public function testIsStringable()
    {
        $string = $this->getTestObject();

        $this->assertSame('test', (string) $string);
    }
}
