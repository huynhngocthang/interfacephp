<?php
include_once(dirname(__FILE__).'/../AbstractClass/Fruits.php') ;
class Orange extends Fruit {
    public function howtoEat()
    {
        echo "Orange could be juiced" ;
    }
}


?>