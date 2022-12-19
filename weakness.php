<?php

class weakness {
    private $energy_type;
    private $value;



    public function __construct($energy_type, $value)
    {
        $this->energy_type = $energy_type;
        $this->value = $value;
        
    }
     public function getResistanceType(){
        return $this->energy_type;
    }

    public function getResistanceValue(){
        return $this->value;
    }
}




?>