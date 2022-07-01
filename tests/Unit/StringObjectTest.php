<?php

declare(strict_types=1);

namespace Tests\Unit;

use HypnoTox\Scalar\Scalar\StringInterface;
use HypnoTox\Scalar\StringObject;

/**
 * @extends ScalarInterfaceTest<string>
 *
 * @internal
 */
final class StringObjectTest extends ScalarInterfaceTest
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
        $this->assertSame('est', $string->substring(1)->getValue());
        $this->assertSame('es', $string->substring(1, 2)->getValue());
        $this->assertSame('te', $string->substring(0, -2)->getValue());
        $this->assertSame('test', $string->getValue());
    }
}
