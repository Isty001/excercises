<?php

namespace Excercises\Poly;

use Excercises\Poly\Poly;

class Square extends Poly
{
    public function __construct(WritableStream $stream)
    {
        parent::__construct($stream);
        $this->returnArea("a^2");
    }
}