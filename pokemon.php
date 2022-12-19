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
  

    // function voor attack met twee parameters en om defend function aan te roepen 

    public function attack($target, $attack)
    {
       
        $target->defend($this, $attack);
        

    }

    // defend function om door resistance en weakness te lopen + takedamage function aan te roepen
    public function defend($attacker, $attack){
        $total_damage = $attack->getAttackDamage();

        // loop weaknesses 
        foreach ($this->weakness as $weaknes){
            if($attacker->energyType == $weaknes->getResistanceType()){
                $total_damage = $total_damage * $weaknes->value;
            }
        }
        // loop resitance 
        foreach ($this->resistance as $resistance){
            if($attacker->energyType == $resistance->getResistanceType()){
            print_r($resistance);
            $total_damage = $total_damage - $resistance->value;
        }
    }
        echo "<p> it dealt" . " " .$total_damage . " " . "damage </p>";
        $this->take_damage($total_damage);
    }

    // take damage function om het damage van totaal hp te vermenderen
    public function take_damage($amount){
        $this->health = $this->health - $amount;
        echo "<p> " . $this->name . " " . "has" . $this->get_hitpoints() . " health points left from ". $this->hitPoints . "</p>";
    }

    // function om de naam te returnen 
    public function getName(){
            return $this->name;
        }

    // function om hitpoints te returnen    
    public function get_hitpoints(){
        return $this->health;
    }
    // function om attack te returnen
    public function getAttack(){
        return $this->attacks;
    }
    // function om energytype te returnen
    public function getEnergyType(){
        return $this->energyType;
    }
   
}








?>