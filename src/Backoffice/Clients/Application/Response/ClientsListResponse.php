<?php

declare(strict_types=1);

namespace Qm\Backoffice\Clients\Application\Response;

 final readonly class ClientsListResponse
{
    public array $clients;

    public function __construct(ClientResponse ...$clients)
    {
        $this->clients = $clients;
    }
}
