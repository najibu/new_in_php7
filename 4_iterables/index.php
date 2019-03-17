<?php

function dumpAll(iterable $items)
{
    foreach ($items as $item) {
        var_dump($item);
    }
}

class Collection implements IteratorAggregate
{
    protected $items;

    public function __construct($items)
    {
        $this->items = $items;
    }

    public function getIterator()
    {
        return new ArrayIterator($this->items);
    }
}

$collection = new Collection(['one', 'two', 'three']);

dumpAll($collection);
