<?php

declare(strict_types=1);

namespace HypnoTox\Scalar\Object;

use HypnoTox\Scalar\Contract\Scalar\StringInterface;
use HypnoTox\Scalar\Contract\ScalarInterface;

class StringObject implements ScalarInterface, StringInterface
{
    public function __construct(
        public readonly string $value,
    ) {
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function substring(int $offset, ?int $length = null): string
    {
        if ($length) {
            return substr((string) $this, $offset, $length);
        }

        return substr((string) $this, $offset);
    }

    public function __toString()
    {
        return $this->value;
    }
}
