<?php

declare(strict_types=1);

namespace Qm\Backoffice\Clients\Application\Create;

Readonly final class CreateClientCommand
{
    public function __construct(public string $id, public string $firstName, public string $lastName)
    {
    }
}
