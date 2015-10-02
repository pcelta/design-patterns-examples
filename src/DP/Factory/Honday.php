<?php


namespace DP\Factory;

use DP\Factory\Car\AbstractCar;
use DP\Factory\Car\Azivic;
use DP\Factory\Car\AzivicSporting;
use DP\Factory\Car\HBCity;
use DP\Factory\Car\HBCitySchumacher;
use DP\Factory\Car\IFudeo2016;

class Honday
{

    const AZIVIC            = 'azivic';
    const HBCITY            = 'hbcity';
    const IFUDEO_2016       = 'ifudeo2016';
    const AZIVIC_SPORTING   = 'azivicsporting';
    const HBCITY_SCHUMACHER = 'ifudeo2016';

    /**
     * @var array
     */
    private static $validCars = [
        self::AZIVIC,
        self::HBCITY,
        self::IFUDEO_2016,
        self::AZIVIC_SPORTING,
        self::HBCITY_SCHUMACHER
    ];

    /**
     * @param string $type
     * @return AbstractCar
     */
    public static function create($type)
    {
        if (!in_array($type, self::$validCars)) {
            throw new \InvalidArgumentException("A Honday não fábrica esse carro aee Manolo!!");
        }

        if ($type === self::AZIVIC) {
            $name = "Azera + Civic";

            return new Azivic($name);
        }

        if ($type === self::HBCITY) {
            $name = "HB20 + City";

            return new HBCity($name);
        }

        if ($type === self::IFUDEO_2016) {
            $name = "A nova zueira da Honday";

            return new IFudeo2016($name);
        }

        if ($type === self::HBCITY_SCHUMACHER) {
            $name = "HB20 + City + Stilo Schumacher";

            return new HBCitySchumacher($name);
        }

        if ($type === self::AZIVIC_SPORTING) {
            $name = "Azera + Civic + Camaro Sporting";

            return new AzivicSporting($name);
        }
    }
}