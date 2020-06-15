<?php
include_once 'Rectangle.php' ;
include_once 'coloable.php' ;

class Square extends Rectangle implements colorable {
    public function __construct($name,$Width)
    {
        parent::__construct($name,$Width,$Width,$Width) ;
    }

    public function howTocolor()
    {
        return 'Color all four sides..' ;
    }

    public function __toString()
    {
        return ('diện tích :' . $this->calculateArea() . 'color :' . $this->howTocolor() ) ;
    }
}


?>