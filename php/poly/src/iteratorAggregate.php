<?php
/**
 * Created by PhpStorm.
 * User: farkasvolgyi.istvan
 * Date: 2015.06.08.
 * Time: 14:13
 */

class IteratorAgg implements IteratorAggregate {

    protected $books = ['Egy', 'Kettő', 'Három', 'Sok'];

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Retrieve an external iterator
     * @link http://php.net/manual/en/iteratoraggregate.getiterator.php
     * @return Traversable An instance of an object implementing <b>Iterator</b> or
     * <b>Traversable</b>
     */
    public function getIterator()
    {
        return new ArrayIterator($this->books);
    }
}

$iteratorAgg = new iteratorAgg();

foreach( $iteratorAgg as $ia ){
    echo $ia;
}