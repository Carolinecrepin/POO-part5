<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    public $shipment = 0; //chargement

    public function __construct(int $storageCapacity, string $color, int $nbSeats)
    {
        $this->storageCapacity = $storageCapacity;
        parent::__construct($color, $nbSeats);
        $this->storageCapacity = $storageCapacity;
    }

    public function getShipment(): int
    {
        return $this->shipment;
    }

    public function setShipment(int $shipment): void
    {
        $this->shipment = $shipment;
    }

    public function isFullOrNot(): string
    {
        $sentence = "";
        if ($this->shipment >= $this->storageCapacity) {
            $sentence = 'Full !!!';
        } else {
            $sentence .= 'In filling...';
        }
        return $sentence;
    }
    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
          $this->setEnergy($energy);
        }
        return $this;
    }
    public function switchOn(): bool        //fonction allumer de type boolean
    {
      return true;
    }

    public function switchOff(): bool     //fonction eteindre de type boolean
    {
      return false;
    }
}