<?php

namespace User;

<<<<<<< HEAD
use User\Listener\SendRecoverPasswordListener;
use User\Listener\SendRegisterListener;
use Zend\EventManager\EventInterface;
use Zend\ModuleManager\Feature\BootstrapListenerInterface;

class Module implements BootstrapListenerInterface
{
    public function getConfig()
=======
class Module
{
    public function getConfig()

>>>>>>> 48b67e3960daee9a36298dac84c713c21d8817a2
    {
        return include __DIR__.'/../config/module.config.php';
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
    public function onBootstrap(EventInterface $e)
    {
        /**
         * @var $eventManager \Zend\EventManager\EventManager
         * @var $serviceManager \Zend\ServiceManager\ServiceManager
         */
        $eventManager = $e->getApplication()->getEventManager();
        $serviceManager = $e->getApplication()->getServiceManager();

        (new SendRegisterListener($serviceManager))->attach($eventManager, 100);
        (new SendRecoverPasswordListener($serviceManager))->attach($eventManager, 100);
    }
=======
>>>>>>> 48b67e3960daee9a36298dac84c713c21d8817a2
}