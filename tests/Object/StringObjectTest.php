<?php

declare(strict_types=1);

namespace Tests\Object;

use HypnoTox\Scalar\Contract\Scalar\StringInterface;
use HypnoTox\Scalar\Object\StringObject;
use Tests\Contract\ScalarInterfaceTest;

/**
 * @extends ScalarInterfaceTest<string>
 */
class StringObjectTest extends ScalarInterfaceTest
{
    protected function getTestObject(): StringObject
    {
        return new StringObject($this->getTestValue());
    }

    protected function getTestValue(): string
    {
        return 'test';
    }

    public function testSubstring(): void
    {
        $string = $this->getTestObject();

        $this->assertInstanceOf(StringInterface::class, $string);
        $this->assertSame('est', $string->substring(1));
        $this->assertSame('es', $string->substring(1, 2));
        $this->assertSame('te', $string->substring(0, -2));
        $this->assertSame('test', $string->getValue());
    }
}
