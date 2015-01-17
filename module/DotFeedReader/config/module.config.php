<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return [
    'router' => [
        'routes' => [
            'feed-home' => [
                'type' => 'Literal',
                'options' => [
                    'route' => '/feed',
                    'defaults' => [
                        'controller' => 'DotFeedReader\Controller\Index',
                        'action'     => 'index',
                    ],
                ]

            ]
        ]
    ],

    'service_manager' => [
        //'invokables' => [
        //    'FeedReaderService' => 'FeedReader\Service\FeedService'
        // ],
        'factories' => [
            
            'FeedReaderService' => 'DotFeedReader\Factory\FeedServiceFactory'
        ]
    ],

    'controllers' => [
        'invokables' => [
            'DotFeedReader\Controller\Index' => 'DotFeedReader\Controller\IndexController',
        ]
    ],

    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ]
    ]
];