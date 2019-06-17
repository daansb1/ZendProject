<?php

use Core\Factories\TransporteSmtpFactory;
use Zend\Form\view\Helper\FormElementErrors;
use Core\Factories\FormElementErrorsFactory;

return[
    'service_manager' => [
        'factories' => [
            'core.transport.smtp' => TransporteSmtpFactory::class

        ]

    ],
    'view_helpers' =>[
        'factories' => [
            FormElementErrors::class => FormElementErrorsFactory::class

        ]
    ]
];

?>