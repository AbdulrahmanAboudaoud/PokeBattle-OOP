<?php

class attack {
    public $name;
    public $damage;



    public function __construct($attackName, $attackDamage)
    {
        $this->name = $attackName;
        $this->damage = $attackDamage;
        
    }
}




?>