<?php

require_once 'Vehicle.php';

class Car extends Vehicle implements LightableInterface
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric'
    ];

    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    /**
     * @var boolean
     */
    private $hasParkBrake = true;


    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }


    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function start()
    {
        try {
            if ($this->hasParkBrake == true){
                throw new Exception();
            }
        }
        catch (Execption $e){
            echo "Le frein a mains est serré";
        }
        finally
        {
            return "Ma voiture roule comme un donut!";
        }
    }
    public function getParkbrake()
    {
        return $this->hasparkbrake;
    }

    public function setParkBrake(){
        if ($this->hasParkBrake == true){
            $this->hasParkBrake = false;
        }else{
            $this->hasParkBrake = true;
        }
    }
    public function switchOn()
    {
        return true;
    }
    public function switchOff()
    {
        return false;
    }
}