<?php

declare(strict_types=1);

namespace HypnoTox\Scalar;

use HypnoTox\Scalar\Scalar\NumberInterface;

/**
 * @psalm-immutable
 */
final class NumberObject implements NumberInterface
{
    /**
     * @param int|float $value
     */
    public function __construct(
        private readonly mixed $value,
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

    public function add(NumberInterface|float|int $number): self
    {
        return new self($this->value + $this->resolveNumber($number));
    }

    public function subtract(NumberInterface|float|int $number): self
    {
        return new self($this->value - $this->resolveNumber($number));
    }

    public function multiply(NumberInterface|float|int $number): self
    {
        return new self($this->value * $this->resolveNumber($number));
    }

    public function divide(NumberInterface|float|int $number): self
    {
        return new self($this->value / $this->resolveNumber($number));
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
