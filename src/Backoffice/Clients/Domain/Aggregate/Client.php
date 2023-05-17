<?php

declare(strict_types=1);

namespace Qm\Backoffice\Clients\Domain\Aggregate;

use Qm\Shared\Domain\Aggregate\AggregateRoot;

class Client extends AggregateRoot
{
    public function __construct(
        private ClientId        $id,
        private ClientFirstName $clientFirstName,
        private ClientLastName  $clientLastName,
    ) {
    }

    public static function fromPrimitives(
        string $id,
        string $fistName,
        string $lastName,
    ): self {
        return new self(
            new ClientId($id),
            new ClientFirstName($fistName),
            new ClientLastName($lastName)
        );
    }

    public function id(): ClientId
    {
        return $this->id;
    }

    public function clientFirstName(): ClientFirstName
    {
        return $this->clientFirstName;
    }

    public function clientLastName(): ClientLastName
    {
        return $this->clientLastName;
    }
}
