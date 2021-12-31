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

    public function substring(int $offset, ?int $length = null): string;
}
