<?php

declare(strict_types=1);

namespace HypnoTox\Scalar\Contract;

/**
 * @template T
 *
 * @psalm-immutable
 * @psalm-consistent-templates
 */
interface ScalarInterface extends \Stringable
{
    /**
     * @return T
     */
    public function getValue(): mixed;
}
