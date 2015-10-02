<?php


namespace DP\Facade;


class Drink 
{
    /**
     * @var string
     */
    private $name;

    /**
     * @param string $name
     */
    public function __consctruct($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}