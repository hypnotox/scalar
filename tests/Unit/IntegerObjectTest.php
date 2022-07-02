<?php

declare(strict_types=1);

namespace Tests\Unit;

use HypnoTox\Scalar\AbstractNumberObject;
use HypnoTox\Scalar\IntegerObject;

/**
 * @extends AbstractNumberObjectTest<int>
 *
 * @internal
 */
final class IntegerObjectTest extends AbstractNumberObjectTest
{
    protected function getTestObject(): AbstractNumberObject
    {
        return new IntegerObject($this->getTestValue());
    }

    protected function getTestValue(): int
    {
        return 100;
    }
}
