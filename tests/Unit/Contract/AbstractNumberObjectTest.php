<?php

declare(strict_types=1);

namespace Tests\Unit\Contract;

use HypnoTox\Scalar\Object\Contract\AbstractNumberObject;
use HypnoTox\Scalar\Object\IntegerObject;

/**
 * @template T of int|float
 *
 * @extends ScalarInterfaceTest<T>
 *
 * @internal
 */
abstract class AbstractNumberObjectTest extends ScalarInterfaceTest
{
    abstract protected function getTestObject(): AbstractNumberObject;

    abstract protected function getTestValue(): int|float;

    public function testCalculationMethods(): void
    {
        $object = $this->getTestObject();
        $value = $this->getTestValue();
        $otherObject = new IntegerObject(10);

        $this->assertSame($value, $object->add(0)->getValue());
        $this->assertSame($value - 10, $object->subtract(10)->getValue());
        $this->assertSame($value * 3, $object->multiply(3)->getValue());
        $this->assertSame($value / 2, $object->divide(2)->getValue());
        $this->assertSame($otherObject->getValue() + $object->getValue(), $object->add($otherObject)->getValue());
        $this->assertSame($value, $object->getValue());
    }
}
