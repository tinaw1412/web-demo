<?php
abstract class Animal{
    const MAX_LEN = 100;
    private $description ='';
    abstract public function move();
    abstract public function eat();
    public function setDes($value){
        if (strlen($value) < self::MAX_LEN){
            $this->description = $value;
            return true;
        }else{
            return false;
        }
    }
    public function describe(){
        echo $this->description . PHP_EOL;
    }
}
