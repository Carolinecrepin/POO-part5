 <?php

  require_once 'Vehicle.php';
  require_once 'LightableInterface.php';
  
  class Car extends Vehicle implements LightableInterface
  {
      //propriétés
      public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
      private string $energy;
  
      private int $energyLevel;

      private bool $hasParkBrake;



      //methodes

  
      public function __construct(string $color, int $nbSeats, string $energy)
      {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
      }
  
      public function getEnergy(): string
      {
          return $this->energy;
      }
  
      public function setEnergy(string $energy): Car
      {
          if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->setEnergy($energy);
          }
          return $this;
      }

      public function setParkBrake(bool $hasParkBrake): void
      {
        $this ->hasParkBrake = $hasParkBrake;
      }

      public function start():string
      { 
            if($this->hasParkBrake) {
              throw new Exception("put the handbrake down first , ");
            }
            return "the car starts";
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