<?php

declare(strict_types=1);

namespace Qm\Apps\Backoffice\Backend\Controller\Clients;

use Qm\Backoffice\Clients\Application\Create\ClientCreator;
use Qm\Backoffice\Clients\Application\Create\CreateClientCommand;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

readonly final class ClientsPutController
{
    public function __construct(private ClientCreator $clientCreator)
    {
    }

    public function __invoke(string $id, Request $request): JsonResponse
    {
        $command = new CreateClientCommand(
            $id,
            (string) $request->get('firstName'),
            (string) $request->get('lastName'),
        );

        $this->clientCreator->create($command);

       return new JsonResponse([], Response::HTTP_CREATED);
    }
}
