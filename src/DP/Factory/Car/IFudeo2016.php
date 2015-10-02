<?php


namespace DP\Factory\Car;


class IFudeo2016 extends AbstractCar
{
    /**
     * @param array $accessories
     */
    public function setAccessories($accessories)
    {
        $this->accessories = $accessories;
    }

    /**
     * @param string $engine
     */
    public function setEngine($engine)
    {
        $this->engine = $engine;
    }

    /**
     * @return IFudeo2016
     */
    public function create()
    {
        $ifudeo2016 = new IFudeo2016("Onde a zueira começa.");
        $ifudeo2016->setEngine("V Negativo");

        return $ifudeo2016;
    }

    /**
     * @return IFudeo2016
     */
    public static function createFullEliteMonsterJamaicaVersion()
    {
        $hbCityShumacher = new HBCitySchumacher("HB20 + City + Estilo Schumacher");
        $accessories = $hbCityShumacher->getAccessories();

        $azivicSporting = new AzivicSporting("Azera + Civic + Camaro Sporting");
        $engine = $azivicSporting->getEngine();

        $ifudeo2016 = new IFudeo2016("Onde a zueira começa.");
        $ifudeo2016->setAccessories($accessories);
        $ifudeo2016->setEngine($engine);

        return $ifudeo2016;
    }
}