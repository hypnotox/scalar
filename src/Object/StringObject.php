<?php

declare(strict_types=1);

namespace HypnoTox\Scalar\Object;

use HypnoTox\Scalar\Contract\ScalarInterface;

class StringObject implements ScalarInterface
{
    public function __construct(
        public readonly string $value,
    ) {
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function __toString()
    {
        return $this->value;
    }
}
