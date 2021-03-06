<?php

declare(strict_types=1);

namespace HypnoTox\Scalar;

use HypnoTox\Scalar\Object\BooleanObject;
use HypnoTox\Scalar\Object\Contract\BooleanInterface;
use HypnoTox\Scalar\Object\Contract\NumberInterface;
use HypnoTox\Scalar\Object\Contract\ScalarInterface;
use HypnoTox\Scalar\Object\Contract\StringInterface;
use HypnoTox\Scalar\Object\FloatObject;
use HypnoTox\Scalar\Object\IntegerObject;
use HypnoTox\Scalar\Object\StringObject;

final class Scalar
{
    public static function of(int|float|string|bool $value): ScalarInterface
    {
        return match (true) {
            \is_int($value)    => new IntegerObject($value),
            \is_float($value)  => new FloatObject($value),
            \is_string($value) => new StringObject($value),
            \is_bool($value)   => new BooleanObject($value),
        };
    }

    public static function int(int $value): NumberInterface
    {
        return new IntegerObject($value);
    }

    public static function float(float $value): NumberInterface
    {
        return new FloatObject($value);
    }

    public static function string(string $value): StringInterface
    {
        return new StringObject($value);
    }

    public static function bool(bool $value): BooleanInterface
    {
        return new BooleanObject($value);
    }
}
