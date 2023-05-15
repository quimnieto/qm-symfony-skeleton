<?php

namespace ContainerX0xqQ5S;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_EventDispatcherDebugService extends qm_Apps_Backoffice_Backend_BackofficeBackendKernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.event_dispatcher_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['console.command.event_dispatcher_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'event_dispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
        ], [
            'event_dispatcher' => 'Symfony\\Component\\EventDispatcher\\EventDispatcher',
        ]));

        $instance->setName('debug:event-dispatcher');
        $instance->setDescription('Display configured listeners for an application');

        return $instance;
    }
}
