<?php
/**
 * Created by PhpStorm.
 * User: farkasvolgyi.istvan
 * Date: 2015.06.08.
 * Time: 15:05
 */

use Excercises\Poly\ArrayClass;

class arrayTest extends PHPUnit_Framework_TestCase {


    public function testArrayClass(){
        $arrayClass = new ArrayClass();

        $this->assertSame([0, "a", 1, "b", 2, "c", 3], $arrayClass->getIterator());
    }
}
