<?php

declare(strict_types=1);

namespace HypnoTox\Scalars\Contract;

interface ScalarInterface extends \Stringable
{
    public function getValue(): mixed;
}
