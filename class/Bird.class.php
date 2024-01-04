<?php
class Bird extends Animal{
    public function move(){
        echo 'Moves by flying' . PHP_EOL;
    }
    
    public function eat(){
        echo 'Eats grass seeds' . PHP_EOL;
    }
}
