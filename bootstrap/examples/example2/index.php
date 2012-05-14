<?php

require_once 'phar://proem.phar';

(new \Proem\Autoloader)
    ->registerNamespace('Module', 'lib')
    ->registerNamespace('Example', 'lib')
    ->register();

(new \Proem\Proem)
    ->attachEventListener([
        'name' => 'pre.in.response',
        'callback' => function() {
            $asset = new Proem\Service\Asset\Standard;
            return $asset->set('Proem\IO\Response\Template', $asset->single(function() {
                return new \Example\Response;
            }));
        }
    ])
    ->init();
