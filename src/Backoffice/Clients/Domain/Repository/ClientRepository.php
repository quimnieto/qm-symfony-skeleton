<?php

namespace Qm\Backoffice\Clients\Domain\Repository;

use Qm\Backoffice\Clients\Domain\Aggregate\Client;

interface ClientRepository
{
    public function save(Client $client): void;

    /**
     * @return Client[]
     */
    public function searchAll(): array;
}
