<?php

declare(strict_types=1);

namespace Tests\Unit;

use HypnoTox\Scalar\StringInterface;
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

    public function testIsInstanceOfStringInterface(): void
    {
        $string = $this->getTestObject();

        $this->assertInstanceOf(StringInterface::class, $string);
    }

    public function testContains(): void
    {
        $string = $this->getTestObject();

        $this->assertTrue($string->contains('est'));
        $this->assertTrue($string->contains('te'));
        $this->assertTrue($string->contains('t'));
        $this->assertFalse($string->contains('tet'));
        $this->assertFalse($string->contains('tst'));
        $this->assertFalse($string->contains('et'));
        $this->assertSame('test', $string->getValue());
    }

    public function testStartsWith(): void
    {
        $string = $this->getTestObject();

        $this->assertTrue($string->startsWith('t'));
        $this->assertTrue($string->startsWith('te'));
        $this->assertTrue($string->startsWith('tes'));
        $this->assertFalse($string->startsWith('est'));
        $this->assertFalse($string->startsWith('es'));
        $this->assertFalse($string->startsWith('e'));
        $this->assertSame('test', $string->getValue());
    }

    public function testEndsWith(): void
    {
        $string = $this->getTestObject();

        $this->assertTrue($string->endsWith('t'));
        $this->assertTrue($string->endsWith('st'));
        $this->assertTrue($string->endsWith('est'));
        $this->assertFalse($string->endsWith('te'));
        $this->assertFalse($string->endsWith('tes'));
        $this->assertSame('test', $string->getValue());
    }

    public function testLength(): void
    {
        $string = $this->getTestObject();

        $this->assertSame(4, $string->length());
        $this->assertSame('test', $string->getValue());
    }

    public function testSubstring(): void
    {
        $string = $this->getTestObject();

        $this->assertSame('est', $string->substring(1)->getValue());
        $this->assertSame('es', $string->substring(1, 2)->getValue());
        $this->assertSame('te', $string->substring(0, -2)->getValue());
        $this->assertSame('test', $string->getValue());
    }
}
