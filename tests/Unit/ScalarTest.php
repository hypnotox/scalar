<?php

declare(strict_types=1);

namespace Tests\Unit;

use HypnoTox\Scalar\Object\Contract\BooleanInterface;
use HypnoTox\Scalar\Object\Contract\NumberInterface;
use HypnoTox\Scalar\Object\Contract\StringInterface;
use HypnoTox\Scalar\Scalar;
use Tests\Unit\Contract\BaseTest;

/**
 * @internal
 */
final class ScalarTest extends BaseTest
{
    public function testOf(): void
    {
        $int = Scalar::of(1);
        $float = Scalar::of(1.1);
        $string = Scalar::of('1.1');
        $bool = Scalar::of(true);

        $this->assertInstanceOf(NumberInterface::class, $int);
        $this->assertInstanceOf(NumberInterface::class, $float);
        $this->assertInstanceOf(StringInterface::class, $string);
        $this->assertInstanceOf(BooleanInterface::class, $bool);
    }

    public function testInt(): void
    {
        $object = Scalar::int(1);

        $this->assertSame(1, $object->getValue());
    }

    public function testFloat(): void
    {
        $object = Scalar::float(1.1);

        $this->assertSame(1.1, $object->getValue());
    }

    public function testString(): void
    {
        $object = Scalar::string('1.1');

        $this->assertSame('1.1', $object->getValue());
    }

    public function testBool(): void
    {
        $object = Scalar::bool(true);

        $this->assertTrue($object->getValue());
    }
}
