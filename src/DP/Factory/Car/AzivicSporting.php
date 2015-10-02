<?php


namespace DP\Factory\Car;


class AzivicSporting extends Azivic
{

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        parent::__construct($name);

        $this->engine = "v8";
    }
}