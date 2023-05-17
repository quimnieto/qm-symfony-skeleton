<?php

declare(strict_types=1);

namespace Qm\Backoffice\Clients\Infrastructure\Persistence;

use Doctrine\ORM\Exception\ORMException;
use Doctrine\ORM\OptimisticLockException;
use Qm\Backoffice\Clients\Domain\Aggregate\Client;
use Qm\Backoffice\Clients\Domain\Repository\ClientRepository;
use Qm\Shared\Infrastructure\Doctrine\DoctrineRepository;

class DoctrineClientRepository extends DoctrineRepository implements ClientRepository
{
    /**
     * @throws OptimisticLockException
     * @throws ORMException
     */
    public function save(Client $client): void
    {
        print_r('entra');
        $this->persist($client);
        print_r('YASSS'); die;
    }

    public function searchAll(): array
    {
        return [];
    }
}
