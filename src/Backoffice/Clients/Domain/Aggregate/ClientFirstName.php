<?php

declare(strict_types=1);

namespace Qm\Backoffice\Clients\Domain\Aggregate;

use Qm\Shared\Domain\ValueObject\StringVO;

class ClientFirstName extends StringVO
{
    public static function of(string $firstName): self
    {
        return new self($firstName);
    }
}
