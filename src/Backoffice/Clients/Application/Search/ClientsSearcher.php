<?php

declare(strict_types=1);

namespace Qm\Backoffice\Clients\Application\Search;

use Qm\Backoffice\Clients\Application\Response\ClientResponse;
use Qm\Backoffice\Clients\Application\Response\ClientsListResponse;
use Qm\Backoffice\Clients\Domain\Aggregate\Client;
use Qm\Backoffice\Clients\Domain\Repository\ClientRepository;

class ClientsSearcher
{
    public function __construct(private readonly ClientRepository $repository)
    {
    }

    public function search(): ClientsListResponse
    {
        $clientsList = $this->repository->searchAll();

        return new ClientsListResponse(
            ...array_map(
                fn (Client $client) => new ClientResponse(
                $client->id()->value(),
                $client->clientFirstName()->value(),
                $client->clientLastName()->value(),
            ),
                $clientsList
            )
        );
    }
}
