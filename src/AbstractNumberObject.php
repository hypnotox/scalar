<?php

declare(strict_types=1);

namespace HypnoTox\Scalar;

/**
 * @template T as int|float
 *
 * @psalm-immutable
 * @implements NumberInterface<T>
 */
abstract class AbstractNumberObject implements NumberInterface
{
    /**
     * @param T $value
     */
    public function __construct(
        protected readonly mixed $value,
    ) {
    }

    public function __toString(): string
    {
        return (string) $this->value;
    }

    public function add(NumberInterface|float|int $number): self
    {
        /** @var int|float $value */
        $value = $this->value;
        $newValue = $value + $this->resolveNumber($number);

        if (\is_int($newValue) || round($newValue) === $newValue) {
            return new IntegerObject((int) $newValue);
        }

        return new FloatObject($newValue);
    }

    /*
     * NumberInterface
     */

    private function resolveNumber(NumberInterface|float|int $number): int|float
    {
        if ($number instanceof NumberInterface) {
            $number = $number->getValue();
        }

        return $number;
    }

    /**
     * @return T
     */
    public function getValue(): mixed
    {
        return $this->value;
    }

    public function subtract(NumberInterface|float|int $number): self
    {
        /** @var int|float $value */
        $value = $this->value;
        $newValue = $value - $this->resolveNumber($number);

        if (\is_int($newValue) || round($newValue) === $newValue) {
            return new IntegerObject((int) $newValue);
        }

        return new FloatObject($newValue);
    }

    public function multiply(NumberInterface|float|int $number): self
    {
        /** @var int|float $value */
        $value = $this->value;
        $newValue = $value * $this->resolveNumber($number);

        if (\is_int($newValue) || round($newValue) === $newValue) {
            return new IntegerObject((int) $newValue);
        }

        return new FloatObject($newValue);
    }

    /*
     * Helper
     */

    public function divide(NumberInterface|float|int $number): self
    {
        /** @var int|float $value */
        $value = $this->value;
        $newValue = $value / $this->resolveNumber($number);

        if (\is_int($newValue) || round($newValue) === $newValue) {
            return new IntegerObject((int) $newValue);
        }

        return new FloatObject($newValue);
    }
}
