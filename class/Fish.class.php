<?php
class Fish extends Animal{
    public function move(){
        echo 'Moves by swimming' . PHP_EOL;
    }
    
    public function eat(){
        echo 'Eats seafood' . PHP_EOL;
    }
}
