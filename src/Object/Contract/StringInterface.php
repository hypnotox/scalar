<?php

declare(strict_types=1);

namespace HypnoTox\Scalar\Object\Contract;

/**
 * @extends ScalarInterface<string>
 * @psalm-immutable
 */
interface StringInterface extends ScalarInterface
{
    /*
     * Non chainable methods
     */

    public function contains(string $needle): bool;

    public function startsWith(string $needle): bool;

    public function endsWith(string $needle): bool;

    public function length(): int;

    /*
     * Chainable methods
     */

    public function substring(int $offset, ?int $length = null): self;
}
