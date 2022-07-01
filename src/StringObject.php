<?php

declare(strict_types=1);

namespace HypnoTox\Scalar;

use HypnoTox\Scalar\Scalar\StringInterface;

/**
 * @psalm-immutable
 */
final class StringObject implements StringInterface
{
    /**
     * @param string $value
     */
    public function __construct(
        private readonly mixed $value,
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

    public function substring(int $offset, ?int $length = null): self
    {
        if ($length) {
            return new self(substr((string) $this, $offset, $length));
        }

        return new self(substr((string) $this, $offset));
    }
}
