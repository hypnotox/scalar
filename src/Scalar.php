<?php

declare(strict_types=1);

namespace HypnoTox\Scalar;

final class Scalar
{
    public static function of(int|float|string|bool $value): ScalarInterface
    {
        return match (true) {
            \is_int($value)    => new NumberObject($value),
            \is_float($value)  => new NumberObject($value),
            \is_string($value) => new StringObject($value),
        };
    }
}
