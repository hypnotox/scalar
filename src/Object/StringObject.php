<?php

declare(strict_types=1);

namespace HypnoTox\Scalar\Object;

use HypnoTox\Scalar\Contract\Scalar\StringInterface;
use HypnoTox\Scalar\Contract\ScalarInterface;

/**
 * @psalm-immutable
 * @psalm-consistent-constructor
 * @psalm-consistent-templates
 */
class StringObject implements ScalarInterface, StringInterface
{
    public function __construct(
        private readonly string $value,
    ) {
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return $this->value;
    }

    /*
     * StringInterface
     */

    /*
     * Non chainable methods
     */

    public function contains(string $needle): bool
    {
        return str_contains($this->value, $needle);
    }

    public function startsWith(string $needle): bool
    {
        return str_starts_with($this->value, $needle);
    }

    public function endsWith(string $needle): bool
    {
        return str_ends_with($this->value, $needle);
    }

    public function length(): int
    {
        return \strlen($this->value);
    }

    /*
     * Chainable methods
     */

    public function substring(int $offset, ?int $length = null): static
    {
        if ($length) {
            return new static(substr((string) $this, $offset, $length));
        }

        return new static(substr((string) $this, $offset));
    }
}
