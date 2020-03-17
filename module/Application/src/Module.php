<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

<<<<<<< HEAD
use Application\Listener\CheckAuthenticationListener;
use Zend\EventManager\EventInterface;
use Zend\ModuleManager\Feature\BootstrapListenerInterface;

class Module implements BootstrapListenerInterface
=======


class Module
>>>>>>> 48b67e3960daee9a36298dac84c713c21d8817a2
{
    const VERSION = '3.0.3-dev';

    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
    public function onBootstrap(EventInterface $e)
    {
        /**
         * @var $eventManager \Zend\EventManager\EventManager
         */
        $eventManager = $e->getApplication()->getEventManager();

        (new CheckAuthenticationListener())->attach($eventManager, 99);
    }
=======
>>>>>>> 48b67e3960daee9a36298dac84c713c21d8817a2
}
