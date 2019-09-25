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

    const Red = 1;

    function __construct($wheels,$col){
        $this->setNumberOfWheels($wheels);
        $this->setColor($col);
    }

    #region NumberOfWheels
    // accessor
    public function getNumberOfWheels(){
        return $this->numberOfWheels;
    }

    //mutator
    public function setNumberOfWheels($val){
        $this->numberOfWheels = $val;
    }
    #endregion
    #region Color
    // accessor
    public function getColor(){
        return $this->color;
    }

    //mutator
    public function setColor($val){
        $this->color = $val;
    }
    #endregion
}