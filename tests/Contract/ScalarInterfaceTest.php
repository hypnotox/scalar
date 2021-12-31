<?php

declare(strict_types=1);

namespace Tests\Contract;

use HypnoTox\Scalar\Contract\ScalarInterface;
use PHPUnit\Framework\TestCase;

abstract class ScalarInterfaceTest extends TestCase
{
    abstract protected function getTestObject(): ScalarInterface;

    public function testCanConstructAndGetValue(): void
    {
        $string = $this->getTestObject();

        $this->assertSame('test', $string->getValue());
    }
}
