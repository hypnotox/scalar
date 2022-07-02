<?php

declare(strict_types=1);

namespace HypnoTox\Scalar;

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
}
