<?php

require_once 'Vehicle.php';

final class ResidentialWay extends HighWay 
{
    public function addVehicle(Vehicle $vehicle)
	{
		if($vehicle instanceof Vehicle) {

		$this->currentVehicles[] = $vehicle;
	} 
    }
}