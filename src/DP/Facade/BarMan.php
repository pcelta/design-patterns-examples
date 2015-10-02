<?php


namespace DP\Facade;


class BarMan
{
    /**
     * @param string $name
     * @return Drink
     */
    public function makeDrink($name)
    {
        return new Drink($name);
    }
}