<?php

declare(strict_types=1);

namespace Tests\Unit;

use HypnoTox\Scalar\ScalarInterface;

/**
 * @template T
 */
abstract class ScalarInterfaceTest extends BaseTest
{
    abstract protected function getTestObject(): ScalarInterface;

    /**
     * @return T
     */
    abstract protected function getTestValue(): mixed;

    public function testCanConstructAndGetValue(): void
    {
        $object = $this->getTestObject();
        $value = $this->getTestValue();

        $this->assertSame($value, $object->getValue());
    }

    public function testIsStringable(): void
    {
        $object = $this->getTestObject();
        $value = $this->getTestValue();

        $this->assertSame((string) $value, (string) $object);
    }
}
