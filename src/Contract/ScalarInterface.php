<?php

declare(strict_types=1);

namespace HypnoTox\Scalar\Contract;

interface ScalarInterface extends \Stringable
{
    public function getValue(): mixed;
}
