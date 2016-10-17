<?php
    class car{
        public $color;
                
        public function setColor($c){
            return 'car is : '.$this->color=$c;
        }    
        public function sayhello(){
            return 'say hello : ';
        }
    }
        $newcar = new car;
        
        $test=$newcar->setColor('red');
        echo $test;
        echo '<hr>';
        
        echo $newcar->sayhello();
        echo '<hr>';
        echo $newcar->color='orange';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

