<?php

class pikachu extends pokemon {
 
    
    public function __construct($name = "pikachu"){

        $type = "electric";
        $hitpoints = 60;
        $weaknesses = array( new weakness ("fire", 1.5),
    );
        $resistances = array(new resistance("fighting",20),
    );
        $attacks = array(
                         new attack("electric ring", 50),
                         new attack("pika punch",20)   
                        );

        parent::__construct($type,$name,$hitpoints,$weaknesses,$resistances,$attacks);                
    }




}











?>