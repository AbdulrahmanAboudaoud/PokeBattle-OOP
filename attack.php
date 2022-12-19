<?php

class attack {
    private $name;
    private $damage;



    public function __construct($attack_name, $attack_damage)
    {
        $this->name = $attack_name;
        $this->damage = $attack_damage;
        
    }
        public function getAttackName()
    {
        return $this->name;
    }

    //Return damage
    public function getAttackDamage()
    {
        return $this->damage;
    }
}




?>