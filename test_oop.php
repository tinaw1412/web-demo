<?php
include_once "class/Animal.class.php";
include_once "class/Bird.class.php";
include_once "class/Fish.class.php";
include_once "class/Eagle.class.php";

$a =new Animal();
/**
 * throw Exception, can't create object from abstract class
 */

$b = new Bird();
$b->setDes('an animal can fly.');
echo 'Bird:' . PHP_EOL;
$b->move();
$b->eat();
$b->describe();
//PHP_EOL 换行
echo PHP_EOL;
/**
 * Bird:
 * Moves by flying
 * Eats grass seeds
 * an animal can fly.
 */


$e = new Eagle();
$e->setDes('an animal can fly, but it is very violent, and it eats meet.');
echo 'Eagle:' . PHP_EOL;
$e->move();
$e->eat();
$e->describe();
echo PHP_EOL;
/**
 * Eagle:
 * Moves by flying
 * Eats meat
 * an animal can fly, but it is very violent, and it eats meet.
 */


$f = new Fish();
$f->setDes('an animal lives in the water');
echo 'Fish:' . PHP_EOL;
$f->move();
$f->eat();
$f->describe();
echo PHP_EOL;
/**
 * Fish:
 * Moves by swimming
 * Eats seafood
 * an animal lives in the water
 */


 $tooLongDes = new Fish();
 $sucess = $tooLongDes->setDes('an animal lives in the water');
 if ($sucess== false){
    echo 'length of description can not greate than ' . Fish::MAX_LEN .PHP_EOL;
 }
 echo 'too Long Des Fish:' . PHP_EOL;
 $tooLongDes->move();
 $tooLongDes->eat();
 $tooLongDes->describe();
 echo PHP_EOL;
 /**
 * too Long Des Fish:
 * length of description can not greate than 100
 * Moves by swimming
 * Eats seafood
 *  (empty description)
 */