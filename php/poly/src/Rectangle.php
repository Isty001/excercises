<?php

namespace Excercises\Poly;

use Excercises\Poly\Poly;

class Rectangle extends Poly
{
    public function __construct(WritableStream $stream)
    {
        parent::__construct($stream);
        $this->returnArea("a*b");
    }
}