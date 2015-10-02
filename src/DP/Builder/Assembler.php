<?php

namespace DP\Builder;

class Assembler
{

    /**
     * @param array  $doors
     * @param string $support
     * @return       Cupboard
     */
    public function build(array $doors, $support)
    {
        $upperDoor = $doors[0];
        $lowerDoor = $doors[1];

        $serieNumber = md5($upperDoor);
        $serieNumber .= md5($support);

        $cupBoard = new Cupboard();
        $cupBoard->setLowerDoor($lowerDoor);
        $cupBoard->setUpperDoor($upperDoor);
        $cupBoard->setSupport($support);
        $cupBoard->setSerieNumber($serieNumber);

        return $cupBoard;
    }
}