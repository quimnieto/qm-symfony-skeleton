<?php

declare(strict_types=1);

namespace Qm\Backoffice\Clients\Infrastructure\Persistence;

use Qm\Backoffice\Clients\Domain\Aggregate\Client;
use Qm\Backoffice\Clients\Domain\Repository\ClientRepository;

class InMemoryClientRepository implements ClientRepository
{
    public function save(Client $client): void
    {
        print_r('ENTRAA'); die;
    }

    public function searchAll(): array
    {
        return [];
    }
}
