<?php

namespace Module\Index\Controller;

class Hello extends \Proem\Controller\Standard
{
    public function world()
    {
        $this->assets->get('response')->appendToBody('Hello World!');
    }
}
