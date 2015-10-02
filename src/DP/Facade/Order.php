<?php


namespace DP\Facade;


class Order 
{
    /**
     * @var array
     */
    private $items = [];

    /**
     * @param $item
     */
    public function addItem($item)
    {
        $this->items[] = $item;
    }

    /**
     * @return mixed
     */
    public function getItems()
    {
        return $this->items;
    }
}