<?php

declare(strict_types=1);

namespace Tests\Contract;

use HypnoTox\Scalar\Contract\ScalarInterface;
use Tests\BaseTest;

abstract class ScalarInterfaceTest extends BaseTest
{
    abstract protected function getTestObject(): ScalarInterface;

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
