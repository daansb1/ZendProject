<?php

namespace User;

<<<<<<< HEAD
use User\Controller\Factory\IndexControllerFactory;
use User\Model\Factory\UserTableFactory;
use User\Model\UserTable;
use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
=======
use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;
>>>>>>> 48b67e3960daee9a36298dac84c713c21d8817a2

return [
    'router' => [
        'routes' => [
            'user' => [
                'type' => Literal::class,
                'options' => [
<<<<<<< HEAD
                    'route' => '/user',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action' => 'register'
                    ]
                ],
                'may_terminate' => true,
                'child_routes' => [
                    'default' => [
                        'type' => Segment::class,
                        'options' => [
                            'route' => '[/:action][/token/:token]',
                            'constraints' => [
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'token' => '[a-f0-9]{32}$'
                            ]
                        ]
                    ]
                ]
            ],
=======
                    'route'    => '/user',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action' =>'register'
                    ]
                ],
                'may_terminate'=> true,
                'child_routes' => [
                    'default' => [
                        'type' => Segment::class,
                        'options'=> [
                            'route' => '[/:action][/token/:token]',
                            'constraints' => [
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'token' => '[[a-f0-9]{32}]$'
                            ]
                        ]
                    ]
                ],
            ]
>>>>>>> 48b67e3960daee9a36298dac84c713c21d8817a2
        ]
    ],
    'controllers' => [
        'factories' => [
<<<<<<< HEAD
            Controller\IndexController::class => IndexControllerFactory::class
        ]
    ],
    'service_manager' => [
        'factories' => [
            UserTable::class => UserTableFactory::class
=======
            Controller\IndexController::class => InvokableFactory::class
>>>>>>> 48b67e3960daee9a36298dac84c713c21d8817a2
        ]
    ],
    'view_manager' => [
        'template_map' => [
<<<<<<< HEAD
            'user/layout/layout' => __DIR__.'/../view/layout/layout.phtml',

            'user/index/confirmed-email' => __DIR__.'/../view/user/index/confirmed-email.phtml',
            'user/index/new-password' => __DIR__.'/../view/user/index/new-password.phtml',
            'user/index/recovered-password' => __DIR__.'/../view/user/index/recovered-password.phtml',
            'user/index/register' => __DIR__.'/../view/user/index/register.phtml',
        ],
        'template_path_stack' => [
            __DIR__.'/../view',
        ]
=======
            'user/index/register' => __DIR__.'/../view/user/index/register.phtml',
            'user/index/confirmed-email' => __DIR__.'/../view/user/index/confirmed-email.phtml',
            'user/index/new-password' => __DIR__.'/../view/user/index/new-password.phtml',
            'user/index/recovery-password' => __DIR__.'/../view/user/index/recovery-password.phtml'
        ],
        'template_path_stack' => [
            __DIR__.'/../view',

        ]

>>>>>>> 48b67e3960daee9a36298dac84c713c21d8817a2
    ]
];