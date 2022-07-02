<?php

declare(strict_types=1);

namespace HypnoTox\Scalar\Object\Contract;

/**
 * @template T
 *
 * @psalm-immutable
 */
interface ScalarInterface extends \Stringable
{
    /**
     * @param T $value
     */
    public function __construct(mixed $value);

    /**
     * @return T
     */
    public function getValue(): mixed;
}
