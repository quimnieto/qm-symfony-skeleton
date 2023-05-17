<?php

declare(strict_types=1);

namespace Qm\Backoffice\Clients\Application\Search;

use Qm\Backoffice\Clients\Application\Response\ClientResponse;
use Qm\Backoffice\Clients\Application\Response\ClientsListResponse;
use Qm\Backoffice\Clients\Domain\Aggregate\Client;
use Qm\Shared\Domain\ValueObject\Uuid;

class ClientsSearcher
{
    public function search(): ClientsListResponse
    {
        $testClient = Client::fromPrimitives(Uuid::random()->value(), 'john', 'smith');

        return new ClientsListResponse(
            ...array_map(
                fn (Client $client) => new ClientResponse(
                $client->id()->value(),
                $client->clientFirstName()->value(),
                $client->clientLastName()->value(),
            ),
                [$testClient]
            )
        );
    }
}
