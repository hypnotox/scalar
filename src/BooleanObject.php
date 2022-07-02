<?php

declare(strict_types=1);

namespace HypnoTox\Scalar;

/**
 * @psalm-immutable
 * @psalm-consistent-constructor
 * @psalm-consistent-templates
 */
final class BooleanObject implements BooleanInterface
{
    /**
     * @param bool $value
     */
    public function __construct(
        private readonly mixed $value,
    ) {
    }

    public function getValue(): bool
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return (string) $this->value;
    }
}
