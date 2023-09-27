<?php

class Voiture{

    protected string $model ;

    protected ReservoirTank $reservoir;

    public function __construct($model,$reservoir)
    {
        $this -> model = $model;
        $this -> ReservoirTank  = $reservoir;

    }

    public function move(float $distance){
        $distance= $distance/1000;
        $this -> tank=consommeEssence();
    }



}


class ReservoirTank{
    private float $availableFuel;
    public function consommeEssence($distanceKm){
        $conssomation;
    }
}


$voiture1 = new Voiture("toyota",230);

print_r($voiture1);

?>




