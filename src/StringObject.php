<?php

declare(strict_types=1);

namespace HypnoTox\Scalars;

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
