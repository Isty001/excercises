<?php

namespace Excercises\Poly;

use Excercises\Poly\Poly;

class Triangle extends Poly
{
    public function __construct(WritableStream $stream)
    {
        parent::__construct($stream);
        $this->returnArea("(b*h)/2");
    }
}