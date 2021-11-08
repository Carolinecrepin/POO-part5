<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';       //implementation de lumière

class Bicycle extends Vehicle implements LightableInterface
{       
    //méthode
    public function switchOn()
    {
        if ($this->currentSpeed < 10) {        //si vitesse <10 il faut aller plus vite
            return "allez plus vite!";
        } return true;                          // si vitesse >10 return true la lumière s'allume
    }

    public function switchOff():bool            //  la lumière s'éteind
    {
        return false; 
    }
}
