<?php

require_once 'phar://proem.phar';

(new \Proem\Autoloader)
    ->registerNamespace('Module', 'lib')
    ->register();

(new \Proem\Proem)->init();
