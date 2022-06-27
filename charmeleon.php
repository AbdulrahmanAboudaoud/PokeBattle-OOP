<?php

class pikachu extends pokemon {
 
    
    public function __construct($name = "charmeleon"){

        $type = "fite";
        $hitpoints = 60;
        $weaknesses = array( new weakness ("water", 2));
        $resistances = array(new resistance("lightning",10));
        $attacks = array(
                         new attack("head butt", 10)
                         new attack("flare",30)   
                        );

        parent::__construct($type,$name,$hitpoints,$weaknesses,$resistances,$attacks);                
    }




}











?>