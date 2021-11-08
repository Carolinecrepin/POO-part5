<?php

require_once 'Bicycle.php';

final class PedestrianWay extends HighWay 
{
    public function addVehicle(Vehicle $vehicle)
	{
		if($vehicle instanceof Bicycle || $vehicle instanceof Skateboard) {

		$this->currentVehicles[] = $vehicle;
	} else {
        return 'enable to drive on the road!';
    }
    }
}