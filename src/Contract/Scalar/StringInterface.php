<?php

declare(strict_types=1);

namespace HypnoTox\Scalar\Contract\Scalar;

use HypnoTox\Scalar\Contract\ScalarInterface;

/**
 * @extends ScalarInterface<string>
 * @psalm-immutable
 * @psalm-consistent-templates
 */
interface StringInterface extends ScalarInterface
{
    public function getValue(): string;

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
