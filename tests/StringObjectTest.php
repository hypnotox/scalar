<?php

declare(strict_types=1);

namespace Tests;

use HypnoTox\Scalars\Object\StringObject;

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

    public function testCanGetValue(): void
    {
        $string = $this->getTestObject();

        $this->assertSame('test', $string->getValue());
    }

    public function testIsStringable(): void
    {
        $string = $this->getTestObject();

        $this->assertSame('test', (string) $string);
    }
}
