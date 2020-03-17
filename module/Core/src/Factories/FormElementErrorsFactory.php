<?php

<<<<<<< HEAD
namespace Core\Factories;

use Interop\Container\ContainerInterface;
use Zend\Form\View\Helper\FormElementErrors;
use Zend\ServiceManager\Factory\FactoryInterface;

class FormElementErrorsFactory implements FactoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $helper = new FormElementErrors();
=======

namespace Core\Factories;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;


class FormElementErrorsFactory implements  FactoryInterface
{
    /**
     *  {@inheritDoc}
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {

        $helper = new FormElementErros();
>>>>>>> 48b67e3960daee9a36298dac84c713c21d8817a2

        $config = $container->get('config');
        if (isset($config['view_helper_config']['form_element_errors'])) {
            $configHelper = $config['view_helper_config']['form_element_errors'];
            if (isset($configHelper['message_open_format'])) {
                $helper->setMessageOpenFormat($configHelper['message_open_format']);
            }
            if (isset($configHelper['message_separator_string'])) {
<<<<<<< HEAD
                $helper->setMessageSeparatorString($configHelper['message_separator_string']);
            }
            if (isset($configHelper['message_close_string'])) {
                $helper->setMessageCloseString($configHelper['message_close_string']);
            }
        }

        return $helper;
    }
}
=======
                $helper->setMessageSeparatorString($configHelper[message_close_string]);
            }
            if (isset($configHelper['message_close_string'])) {
                $helper->setMessageCloseString($configHelper['message_close_string']);

            }

        }
        return $helper;
    }
}


>>>>>>> 48b67e3960daee9a36298dac84c713c21d8817a2
