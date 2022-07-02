<?php

declare(strict_types=1);

namespace Tests\Unit;

use HypnoTox\Scalar\Object\Contract\AbstractNumberObject;
use HypnoTox\Scalar\Object\IntegerObject;
use Tests\Unit\Contract\AbstractNumberObjectTest;

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
