<?php


namespace Core\Factories;


use Zend\Mail\Transport\SmtpOptions;
use Zend\Mail\Transport\Smtp as SmtpTransport;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class TransporteSmtpFactory implements  FactoryInterface
{

    /**
     * {@inheritDoc}
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $config = $container->get('config');
        $transport = new SmtpTransport();
        $options = new  SmtpOptions($config['mail']);
        $transport->setOptions($options);

        return $transport;
    }
}