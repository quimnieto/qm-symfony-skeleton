<?php

declare(strict_types=1);

namespace Qm\Shared\Infrastructure\Bus\Command;

use Qm\Shared\Domain\Bus\Command\Command;
use Qm\Shared\Domain\Bus\Command\CommandBus;
use Qm\Shared\Domain\Bus\Command\CommandHandler;
use Qm\Shared\Infrastructure\Bus\CallableFirstParameterExtractor;
use Symfony\Component\Messenger\Handler\HandlersLocator;
use Symfony\Component\Messenger\MessageBus;
use Symfony\Component\Messenger\Middleware\HandleMessageMiddleware;

class InMemorySymfonyCommandBus implements CommandBus
{
    private MessageBus $bus;

    public function __construct(CommandHandler ...$commandHandlers)
    {
        print_r($commandHandlers);
        $this->bus = new MessageBus(
            [
                new HandleMessageMiddleware(
                    new HandlersLocator(
                        CallableFirstParameterExtractor::forCallables($commandHandlers)
                    )
                )
            ]
        );
    }


    public function dispatch(Command $command): void
    {
        try {
            $this->bus->dispatch($command);
        } catch (\Exception $e) {
            print_r($e->getMessage());
        }
    }
}
