<?php

declare(strict_types=1);

namespace Qm\Apps\Backoffice\Backend\Controller\Dummy;

use Qm\Backoffice\Dummy\Application\Dummy;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

Readonly class DummyGetController
{
    public function __construct(private Dummy $dummy)
    {
    }

    public function __invoke(Request $request): JsonResponse
    {
        return new JsonResponse(
            [
                $this->dummy->execute(),
            ]
        );
    }
}
