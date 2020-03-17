<?php

<<<<<<< HEAD
namespace Core;


use Zend\I18n\Translator\Resources;
use Zend\EventManager\EventInterface;
use Zend\Validator\AbstractValidator;
use Zend\ModuleManager\Feature\BootstrapListenerInterface;

class Module implements BootstrapListenerInterface
{
    public function onBootstrap(EventInterface $event)
    {
        $serviceManager = $event->getApplication()->getServiceManager();  ;

        $translator = $serviceManager->get('translator');
        $translator->setLocale(\Locale::acceptFromHttp('pt_BR'));
        $translator->addTranslationFilePattern(
            'phpArray',
            Resources::getBasePath(),
            Resources::getPatternForValidator()
        );

        $translator->addTranslationFilePattern(
            'phpArray',
            Resources::getBasePath(),
            Resources::getPatternForCaptcha()
        );

        AbstractValidator::setDefaultTranslator($translator);
    }
=======

namespace Core;


class Module
{
>>>>>>> 48b67e3960daee9a36298dac84c713c21d8817a2

    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 48b67e3960daee9a36298dac84c713c21d8817a2
