<?php
include ('Comparator.php') ;
include ('Cricle.php') ;

class CricleComparator implements Comparator {
    
    
    public function  Comparator($cricleOne, $cricleTwo)
    {
        $radiusOne = $cricleOne->getRadius() ;
        $radiusTwo = $cricleTwo->getRadius() ;
        if($radiusOne > $radiusTwo) {
            return 1;
        } elseif($radiusOne < $radiusTwo) {
            return -1 ;
        } else {
            return 0 ;
        }
    }
}


?>