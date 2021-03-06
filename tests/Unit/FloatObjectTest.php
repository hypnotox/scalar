<?php

declare(strict_types=1);

namespace Tests\Unit;

use HypnoTox\Scalar\Object\Contract\AbstractNumberObject;
use HypnoTox\Scalar\Object\FloatObject;
use Tests\Unit\Contract\AbstractNumberObjectTest;

/**
 * @extends AbstractNumberObjectTest<int>
 *
 * @internal
 */
final class FloatObjectTest extends AbstractNumberObjectTest
{
    protected function getTestObject(): AbstractNumberObject
    {
        return new FloatObject($this->getTestValue());
    }

    protected function getTestValue(): float
    {
        return 50.5;
    }
}
