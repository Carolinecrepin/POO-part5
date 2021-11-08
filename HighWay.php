<?php

// HighWay.php
abstract class HighWay
{
    //propriétés
    protected array $currentVehicles;       //nombre de vehicule courant

    protected int $nbLane;                  //nombre de voix sur l'autoroute

    protected int $maxSpeed;                //vitesse maximale

    //methodes

    public function __construct(int $nbLane,int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles(array $currentVehicles): void
    {
            $this->currentVehicles = $currentVehicles;
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }
    abstract public function addVehicle(Vehicle $vehicle);

}
