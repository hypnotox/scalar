<?php

declare(strict_types=1);

namespace Tests\Unit;

use HypnoTox\Scalar\Object\BooleanObject;
use Tests\Unit\Contract\ScalarInterfaceTest;

/**
 * @extends ScalarInterfaceTest<string>
 *
 * @internal
 */
final class BooleanObjectTest extends ScalarInterfaceTest
{
    protected function getTestObject(): BooleanObject
    {
        return new BooleanObject($this->getTestValue());
    }

    protected function getTestValue(): bool
    {
        return true;
    }
}
