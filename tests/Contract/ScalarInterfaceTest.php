<?php

declare(strict_types=1);

namespace Tests\Contract;

use HypnoTox\Scalar\Contract\ScalarInterface;
use Tests\BaseTest;

abstract class ScalarInterfaceTest extends BaseTest
{
    abstract protected function getTestObject(): ScalarInterface;

    public function testCanConstructAndGetValue(): void
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
