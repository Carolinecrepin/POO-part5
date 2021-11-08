<?php
require_once 'Car.php';
require_once 'HighWay.php';

final class MotorWay extends HighWay 
{

public function addVehicle(Vehicle $vehicle)
    {
        if($vehicle instanceof Car) {

            $this->currentVehicles[] = $vehicle;
        }else{
            
            return 'enable to drive on the road!';
        }
    }
}