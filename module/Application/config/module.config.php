<?php
<<<<<<< HEAD

namespace Application;

use Application\Controller\Factory\DashboardControllerFactory;
use Application\Model\AttachmentTable;
use Application\Model\TicketTable;
use Application\Controller\Factory\TicketControllerFactory;
use Application\Model\Factory\AttachmentTableFactory;
use Application\Model\Factory\TicketTableFactory;
use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
=======
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;
>>>>>>> 48b67e3960daee9a36298dac84c713c21d8817a2

return [
    'router' => [
        'routes' => [
<<<<<<< HEAD
            'dashboard' => [
=======
            'home' => [
>>>>>>> 48b67e3960daee9a36298dac84c713c21d8817a2
                'type' => Literal::class,
                'options' => [
                    'route'    => '/',
                    'defaults' => [
<<<<<<< HEAD
                        'controller' => Controller\DashboardController::class,
=======
                        'controller' => Controller\IndexController::class,
>>>>>>> 48b67e3960daee9a36298dac84c713c21d8817a2
                        'action'     => 'index',
                    ],
                ],
            ],
<<<<<<< HEAD
            'ticket' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/ticket[/:action][/:id]',
                    'defaults' => [
                        'controller' => Controller\TicketController::class,
                        'action'     => 'plus',
                    ],
                    'constraints' => [
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*', //exemplo
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id' => '\d+',
                    ]
=======
            'application' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/application[/:action]',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'index',
                    ],
>>>>>>> 48b67e3960daee9a36298dac84c713c21d8817a2
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
<<<<<<< HEAD
            Controller\DashboardController::class => DashboardControllerFactory::class,
            Controller\TicketController::class => TicketControllerFactory::class,
        ],
    ],
    'service_manager' => [
        'factories' => [
            TicketTable::class => TicketTableFactory::class,
            AttachmentTable::class => AttachmentTableFactory::class,
        ]
    ],
    'view_manager' => [
        'template_map' => [
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'application/dashboard/index' => __DIR__ . '/../view/application/dashboard/index.phtml',

            //Ticket
            'application/ticket/delete' => __DIR__ . '/../view/application/ticket/delete.phtml',
            'application/ticket/edit' => __DIR__ . '/../view/application/ticket/edit.phtml',
            'application/ticket/plus' => __DIR__ . '/../view/application/ticket/plus.phtml',

            //Partials
            'application/ticket/form' => __DIR__ . '/../view/application/ticket/form.phtml',

            //Paginator
            'application/ticket/paginator' => __DIR__ . '/../view/application/ticket/paginator.phtml',

=======
            Controller\IndexController::class => InvokableFactory::class,
        ],
    ],
    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => [
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
>>>>>>> 48b67e3960daee9a36298dac84c713c21d8817a2
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];
