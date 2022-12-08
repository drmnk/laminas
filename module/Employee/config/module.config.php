<?php

namespace Employee;

use Laminas\ServiceManager\Factory\InvokableFactory;
use Laminas\Router\Http\Segment;

return [
    'router' => [
        'routes' => [
            'employee' =>  [
                'type' => Segment::class,
                'options' => [
                    'route' => '/employee[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\EmployeeController::class,
                        'action' => 'index'
                    ]
                ],
            ]
        ]
    ],
    'view_manager' => [
        'template_path_stack' => [
            'employee' => __DIR__ .'/../view/'
        ]
    ]
];