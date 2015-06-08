<?php
namespace Excercises\Poly;

class Poly
{
    /**
     * @var WritableStream
     */
    private $stream;
    public function __construct(WritableStream $stream)
    {
        $this->stream = $stream;
    }

    /**
     * @param Shape $shape
     */
    public function printAreaFormula(Shape $shape) {
        $this->stream->write($shape->returnArea());
    }
}