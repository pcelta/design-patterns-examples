<?php


namespace DP\Factory\Car;


abstract class AbstractCar
{

    /**
     * @var array
     */
    protected $accessories = [];

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $engine;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return array
     */
    public function getAccessories()
    {
        return $this->accessories;
    }

    /**
     * @return mixed
     */
    public function getEngine()
    {
        return $this->engine;
    }
}