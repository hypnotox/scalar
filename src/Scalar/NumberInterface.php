<?php

declare(strict_types=1);

namespace HypnoTox\Scalar\Scalar;

use HypnoTox\Scalar\ScalarInterface;

/**
 * @extends ScalarInterface<int|float>
 * @psalm-immutable
 */
interface NumberInterface extends ScalarInterface
{
    public function add(self|int|float $number): self;

    public function subtract(self|int|float $number): self;

    public function multiply(self|int|float $number): self;

    public function divide(self|int|float $number): self;
}
