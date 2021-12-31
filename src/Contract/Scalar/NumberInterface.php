<?php

declare(strict_types=1);

namespace HypnoTox\Scalar\Contract\Scalar;

use HypnoTox\Scalar\Contract\ScalarInterface;

/**
 * @extends ScalarInterface<int|float>
 * @psalm-immutable
 * @psalm-consistent-templates
 */
interface NumberInterface extends ScalarInterface
{
    public function getValue(): int|float;

    public function add(self|int|float $number): self;

    public function subtract(self|int|float $number): self;

    public function multiply(self|int|float $number): self;

    public function divide(self|int|float $number): self;
}
