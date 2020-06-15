<?php
include_once ('Shape.php') ;
include_once "Resizeable.php" ;


class Rectangle extends Shape implements Resizeable {
    public $width ;
    public $height ;

    public function __construct($name,$width,$height)
    {
        parent::__construct($name) ;
        $this->width = $width ;
        $this->height = $height ;
    }

    public function calculateArea() {
        return $this->height * $this->width ;
    }

    public function calculatePerimeter() {
        return ($this->height + $this->width) *2 ;
    }
    public function reSize($double)
    {
        return floor($this->calculateArea() * $double)  ;
    }

    public function __toString()
    {
        return ('diện tích ban đầu :' . $this->calculateArea() . 'diện tích đã thay đổi :' . $this->reSize(rand(0,100)) ) ;
    }
}



?>