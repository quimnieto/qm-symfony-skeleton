<?php

declare(strict_types=1);

namespace Qm\Backoffice\Clients\Application\Response;

final readonly class ClientResponse
{
    public function __construct(
        public string $id,
        public string $firstName,
        public string $lastName
    ) {
    }
}
