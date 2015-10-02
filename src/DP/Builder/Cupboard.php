<?php


namespace DP\Builder;


class Cupboard 
{

    /**
     * @var string
     */
    private $serieNumber;

    /**
     * @var string
     */
    private $support;

    /**
     * @var string
     */
    private $lowerDoor;

    /**
     * @var string
     */
    private $upperDoor;

    /**
     * @return string
     */
    public function getSerieNumber()
    {
        return $this->serieNumber;
    }

    /**
     * @param string $serieNumber
     */
    public function setSerieNumber($serieNumber)
    {
        $this->serieNumber = $serieNumber;
    }

    /**
     * @return string
     */
    public function getSupport()
    {
        return $this->support;
    }

    /**
     * @param string $support
     */
    public function setSupport($support)
    {
        $this->support = $support;
    }

    /**
     * @return string
     */
    public function getLowerDoor()
    {
        return $this->lowerDoor;
    }

    /**
     * @param string $lowerDoor
     */
    public function setLowerDoor($lowerDoor)
    {
        $this->lowerDoor = $lowerDoor;
    }

    /**
     * @return string
     */
    public function getUpperDoor()
    {
        return $this->upperDoor;
    }

    /**
     * @param string $upperDoor
     */
    public function setUpperDoor($upperDoor)
    {
        $this->upperDoor = $upperDoor;
    }
}