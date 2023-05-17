<?php

declare(strict_types=1);

namespace Backoffice\Clients\Application\Create;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Qm\Backoffice\Clients\Application\Create\ClientCreator;
use Qm\Backoffice\Clients\Application\Create\CreateClientCommand;
use Qm\Backoffice\Clients\Domain\Aggregate\Client;
use Qm\Backoffice\Clients\Domain\Repository\ClientRepository;

class ClientCreatorTest extends TestCase
{
    private MockObject $repository;
    private ClientCreator $sut;

    protected function setUp(): void
    {
        parent::setUp();

        $this->repository = $this->createMock(ClientRepository::class);

        $this->sut = new ClientCreator($this->repository);
    }

    public function test_create_new_client(): void
    {
        $command = new CreateClientCommand(
            '14f3c42e-366a-4e3b-ae54-94f0f67efc27',
            'Juan',
            'Palomo'
        );

        $client = Client::fromPrimitives(
            $command->id,
            $command->firstName,
            $command->lastName
        );

        $this->repository
            ->expects(self::once())
            ->method('save')
            ->with($client);

        $this->sut->create($command);
    }
}
