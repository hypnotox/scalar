<?php

declare(strict_types=1);

namespace Tests\Object;

use HypnoTox\Scalar\Object\NumberObject;
use Tests\Contract\ScalarInterfaceTest;

/**
 * @extends ScalarInterfaceTest<int>
 */
class NumberObjectTest extends ScalarInterfaceTest
{
    protected function getTestObject(): NumberObject
    {
        return new NumberObject($this->getTestValue());
    }

    protected function getTestValue(): int
    {
        return 100;
    }

    public function testCalculationMethods(): void
    {
        $object = $this->getTestObject();
        $value = $this->getTestValue();
        $otherObject = new NumberObject(10);

        $this->assertSame($value, $object->add(0)->getValue());
        $this->assertSame($value - 10, $object->subtract(10)->getValue());
        $this->assertSame($value * 3, $object->multiply(3)->getValue());
        $this->assertSame($value / 2, $object->divide(2)->getValue());
        $this->assertSame($otherObject->getValue() + $object->getValue(), $object->add($otherObject)->getValue());
        $this->assertSame($value, $object->getValue());
    }
}
