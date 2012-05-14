<?php

require_once 'phar://proem.phar';

(new \Proem\Autoloader)
    ->registerNamespace('Module', 'lib')
    ->register();

(new \Proem\Proem)
    ->attachEventListener([
        'name' => 'post.in.router',
        'callback' => function($event) {
            $event->getServiceManager()->get('router')
                ->map(
                    'foo',
                    new Proem\Routing\Route\Standard([
                        'rule' => '/foo',
                        'targets' => [
                            'module'     => 'index',
                            'controller' => 'hello',
                            'action'     => 'world'
                        ]
                    ])
                );
        }
    ])
    ->init();
