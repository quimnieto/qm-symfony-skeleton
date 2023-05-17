<?php

declare(strict_types=1);

namespace Qm\Backoffice\Shared\Infrastructure\Doctrine;

use Doctrine\DBAL\Exception;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Exception\ORMException;
use Qm\Shared\Infrastructure\Doctrine\DoctrineEntityManagerFactory;

final class BackofficeEntityManagerFactory
{
    private const SCHEMA_PATH = __DIR__ . '/../../../../../databases/backoffice.sql';

    /**
     * @throws Exception
     * @throws ORMException
     */
    public static function create(array $parameters, string $environment): EntityManagerInterface
    {
        $isDevMode = 'prod' !== $environment;

        $prefixes = array_merge(
            DoctrinePrefixesSearcher::inPath(__DIR__ . '/../../../../Backoffice', 'Qm\Backoffice')
        );

        $dbalCustomTypesClasses = DbalTypesSearcher::inPath(__DIR__ . '/../../../../Backoffice', 'Backoffice');

        return DoctrineEntityManagerFactory::create(
            $parameters,
            $prefixes,
            $isDevMode,
            self::SCHEMA_PATH,
            $dbalCustomTypesClasses
        );
    }
}
