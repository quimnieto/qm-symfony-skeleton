<?php

declare(strict_types=1);

namespace Qm\Backoffice\Clients\Application\Create;

use Qm\Backoffice\Clients\Domain\Aggregate\Client;
use Qm\Backoffice\Clients\Domain\Repository\ClientRepository;
use Qm\Shared\Domain\Bus\Event\EventBus;

readonly class ClientCreator
{
    public function __construct(
        private ClientRepository $repository,
        private EventBus $bus,
    ) {
    }

    public function create(CreateClientCommand $command): void
    {
        $client = Client::fromPrimitives(
            $command->id,
            $command->firstName,
            $command->lastName
        );

        $this->repository->save($client);
        $this->bus->publish(...$client->pullDomainEvents());
    }
}
