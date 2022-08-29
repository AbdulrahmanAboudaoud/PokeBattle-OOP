<?php
class pokemon {
    public static $count =0;
    private $name;
    private $energyType;
    private $hitPoints;
    private $health;
    private $attacks;
    private $weakness;
    private $resistance;




    public function __construct( $type,$name, $hitPoints, $weakness, $resistance, $attacks ){
        $this->energyType = $type;
        $this->name = $name;
        $this->hitPoints = $hitPoints;
        $this->health = $hitPoints;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        $this->attacks = $attacks;
        self ::$count++;

        
    
    }
  



    public function attack($target, $attack)
    {
        echo "<p>" . $this->name ." " .  "attacked" . " ".  $target->name ." " . "with " ." " . $attack->name . "</p>";
        $target->defend($this, $attack);
        

    }
    public function defend($attacker, $attack){
        $total_damage = $attack->damage;

        // loop weaknesses 
        foreach ($this->weakness as $weaknes){
            if($attacker->energyType == $weaknes->energy_type){
                $total_damage = $total_damage * $weaknes->value;
            }
        }
        // loop resitance 
        foreach ($this->resistance as $resistance){
            if($attacker->energyType == $resistance->energy_type){
            print_r($resistance);
            $total_damage = $total_damage - $resistance->value;
        }
    }
        echo "<p> it dealt" . " " .$total_damage . " " . "damage </p>";
        $this->take_damage($total_damage);
    }


    public function take_damage($amount){
        $this->health = $this->health - $amount;
        echo "<p> " . $this->name . " " . "has" . $this->get_hitpoints() . " health points left from ". $this->hitPoints . "</p>";
    }

    public function get_hitpoints(){
        return $this->health;
    }
    public function getAttack(){
        return $this->attacks;
    }
    public function getEnergyType(){
        return $this->energyType;
    }
   
}








?>