<?php

namespace ContainerJlJXxdg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDummyGetControllerService extends Qm_Apps_Backoffice_Backend_BackofficeBackendKernelDevDebugContainer
{
    /**
     * Gets the public 'Qm\Apps\Backoffice\Backend\Controller\Dummy\DummyGetController' shared autowired service.
     *
     * @return \Qm\Apps\Backoffice\Backend\Controller\Dummy\DummyGetController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Controller/Dummy/DummyGetController.php';

        return $container->services['Qm\\Apps\\Backoffice\\Backend\\Controller\\Dummy\\DummyGetController'] = new \Qm\Apps\Backoffice\Backend\Controller\Dummy\DummyGetController(new \SupremeUmbrella\Backoffice\Dummy\Application\Dummy());
    }
}