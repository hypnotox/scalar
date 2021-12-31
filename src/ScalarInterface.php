<?php

namespace HypnoTox\Scalars;

interface ScalarInterface extends \Stringable
{
    public function getValue(): mixed;
}