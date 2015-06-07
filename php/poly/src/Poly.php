<?php

namespace Excercises\Poly;

class Poly
{
    /**
     * @var WritableStream
     */
    protected $stream;
    protected $area;

    public function __construct(WritableStream $stream)
    {
        $this->stream = $stream;
    }

    public function returnArea($area){
        $this->stream->write($area);
    }
}