<?php

require_once 'Vehicle.php';

class Skateboard extends Vehicle
{
    /**
     * @var int
     */
    private $energy;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }
}