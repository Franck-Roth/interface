<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bicycle extends vehicle implements LightableInterface
{
    /**
     * @var integer
     */
    private $nbSeats;

    /**
     * @var integer
     */
    private $nbWheels;

    /**
     * @var string
     */
    private $color;

    /**
     * @var int
     */
    private $currentSpeed = 5;

    public function __construct(string $color, int $nbWheels)
    {
        $this->color = $color;
        $this->nbWheels = $nbWheels;
    }
    public function switchOn()
    {
        if($this->currentSpeed>10){
            return true;
        }
    }
    public function switchOff()
    {
        return false;
    }
}