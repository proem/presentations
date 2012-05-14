<?php

namespace Example;

class Response extends \Proem\IO\Response\Http\Standard
{
    public function __construct() {
        parent::__construct();

        $this->body = "Some text to prepend to ";
        $this->length = strlen($this->body);
    }
}
