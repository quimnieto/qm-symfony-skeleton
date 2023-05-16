<?php

declare(strict_types=1);

namespace Qm\Apps\Backoffice\Backend\Controller\Clients;


use Qm\Backoffice\Clients\Application\Response\ClientResponse;
use Qm\Backoffice\Clients\Application\Search\ClientsSearcher;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

readonly class ClientsGetController
{
    public function __construct(private ClientsSearcher $clientsSearcher)
    {
    }

    public function __invoke(Request $request): JsonResponse
    {
        $response = $this->clientsSearcher->search();

        return new JsonResponse(
            array_map(
                fn (ClientResponse $clientResponse) => [
                'id' => $clientResponse->id,
                'firstName' => $clientResponse->firstName,
                'lastName' => $clientResponse->lastName,
            ],
                $response->clients
            ),
            Response::HTTP_OK
        );
    }
}
