<?php

declare(strict_types=1);

namespace HypnoTox\Scalar;

use HypnoTox\Scalar\Scalar\NumberInterface;

/**
 * @psalm-immutable
 * @psalm-consistent-constructor
 * @psalm-consistent-templates
 */
final class NumberObject implements NumberInterface, ScalarInterface
{
    public function __construct(
        private readonly int|float $value,
    ) {
    }

    public function getValue(): int|float
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return (string) $this->value;
    }

    /*
     * NumberInterface
     */

    public function add(NumberInterface|float|int $number): static
    {
        return new self($this->value + $this->resolveNumber($number));
    }

    public function subtract(NumberInterface|float|int $number): static
    {
        return new static($this->value - $this->resolveNumber($number));
    }

    public function multiply(NumberInterface|float|int $number): static
    {
        return new static($this->value * $this->resolveNumber($number));
    }

    public function divide(NumberInterface|float|int $number): static
    {
        return new static($this->value / $this->resolveNumber($number));
    }

    /*
     * Helper
     */

    private function resolveNumber(NumberInterface|float|int $number): int
    {
        if ($number instanceof NumberInterface) {
            $number = $number->getValue();
        }

        return (int) $number;
    }
}
