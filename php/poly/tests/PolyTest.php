<?php

namespace Excercises\Poly\Tests;

use Excercises\Poly\Poly;
use Excercises\Poly\Shape;
use Excercises\Poly\Square;
use Excercises\Poly\Triangle;
use Excercises\Poly\Rectangle;
use Excercises\Poly\Tests\Spy\Stream;

class PolyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testShapeAreas(Shape $shape, $expected){
        $stream = new Stream();
        $poly = new Poly($stream);

        $poly->printAreaFormula($shape);
        $this->assertSame($expected, $stream->lastWritten());
    }

    public function additionProvider(){
        return [
            [new Square,"a^2"],
            [new Triangle,"(b*h)/2"],
            [new Rectangle,"a*b"],
        ];
    }
}
