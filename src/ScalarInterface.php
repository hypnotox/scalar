<?php

declare(strict_types=1);

namespace HypnoTox\Scalars;

interface ScalarInterface extends \Stringable
{
    public function getValue(): mixed;
}
