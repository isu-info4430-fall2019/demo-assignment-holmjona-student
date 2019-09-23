<?php

/**
 * Things you can me transported inside.
 *
 * @version 1.0
 * @author holmjona
 */
class Vehicle
{
    private $numberOfWheels = 6;
    private $color;

    // accessor
    public function getNumberOfWheels(){
        return $this->numberOfWheels;
    }

    //mutator
    public function setNumberOfWheels($val){
        $this->numberOfWheels = $val;
    }

}