<?php

declare(strict_types=1);

namespace Qm\Backoffice\Clients\Infrastructure\Persistence\Doctrine;

use Qm\Backoffice\Clients\Domain\Aggregate\ClientId;
use Qm\Backoffice\Shared\Infrastructure\Doctrine\UuIdType;

class ClientIdType extends UuIdType
{
    protected function typeClassName(): string
    {
        return ClientId::class;
    }
}
