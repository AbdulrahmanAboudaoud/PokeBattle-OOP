<?php
class pokemon {
    public $name;
    public $energyType;
    public $hitPoints;
    public $health;
    public $attacks;
    public $weakness;
    public $resistance;




    public function __construct($name, $energyType, $hitPoints, $health, $attacks, $weakness, $resistance  ){
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitPoints = $hitPoints;
        $this->health = $health;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;

        
    
    }

    public function __toString(){       
        return $this->name . ' ' . $this->energyType . ' ' . $this->attacks . ' ' . $this->weakness . ' ' . $this->resistance;
    }

    public function attack($target, $attack)
    {
        echo "<p>" . $this->name . "attacked" . $target->name . "with the move" . $attack->name . "<p>"
        $target->defend($this, $attack);
        

    }
    public function defend($attacker, $attack){
        // loop weaknesses 
        foreach ($this->weakness as $weaknes){
            if($attacker->energyType == $weaknes->enerrgyType){
                $totalDamage = $totalDamage * $weaknes->value;
            }
        }
        // loop resitance 
        foreach ($this->resistance as $resistance){
            if($attacker->energyType == $resistance->enerrgyType){
            print_r($resistance);
            $totalDamage = $totalDamage - $resistance->value;
        }
    }
        echo "<p> it dealt" . $totalDamage .  "damage </p>";
        $this->takeDamage($totalDamage);
    }


    public function takeDamage($amount){
        $this->health = $this->health - $amount;
        echo "<p> " . $this->name . "has" . $this->getHp() . " health points left from ". $this->hitPoints . "</p>";
    }

    public function getHp(){
        return $this->health;
    }
}








?>