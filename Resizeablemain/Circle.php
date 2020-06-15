<?php
include_once "Shape.php" ;
include_once "Resizeable.php" ;

class Circle extends Shape implements Resizeable {
    public $radius ;

    public function __construct($name , $radius)
    {
        parent::__construct($name) ;
        $this->radius = $radius ;
    }

    public function reSize($double)
    {
        return floor($this->calculateArea() * $double)  ;
    }

    public function calculateArea() {
        return floor(pi() * pow($this->radius,2)) ;
    }

    public function calculatePerimeter() {
        return pi() * $this->radius * 2 ;
    }
    public function __toString()
    {
        return ('diện tích ban đầu :' . $this->calculateArea() . 'diện tích đã thay đổi :' . $this->reSize(rand(0,100)) ) ;
    }
}


?>