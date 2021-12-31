<?php

declare(strict_types=1);

namespace Tests\Object;

use HypnoTox\Scalar\Object\StringObject;
use Tests\Contract\ScalarInterfaceTest;

class StringObjectTest extends ScalarInterfaceTest
{
    protected function getTestObject(): StringObject
    {
        return new StringObject('test');
    }

    public function testIsStringable(): void
    {
        $string = $this->getTestObject();

        $this->assertSame('test', (string) $string);
    }
}
