<?php


namespace DP\Factory\Car;


class HBCitySchumacher extends HBCity
{

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        parent::__construct($name);

        $this->accessories[] = "sunroof";
    }

}