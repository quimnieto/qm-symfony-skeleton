<?php

declare(strict_types=1);

namespace Qm\Backoffice\Clients\Application\Create;

use Qm\Backoffice\Clients\Domain\Aggregate\Client;
use Qm\Backoffice\Clients\Domain\Repository\ClientRepository;

readonly class ClientCreator
{
    public function __construct(private ClientRepository $repository)
    {
    }

    public function create(CreateClientCommand $command): void
    {
        $client = Client::fromPrimitives(
            $command->id,
            $command->firstName,
            $command->lastName
        );

        $this->repository->save($client);
    }
}
