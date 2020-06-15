<?php
include ("CricleComparator.php") ;

$cricleOne = new Cricle(5,'cricleOne') ;
$cricleTwo = new Cricle(6,'cricleTwo') ;
$cricleComparator = new CricleComparator() ;

echo ($cricleComparator->Comparator($cricleOne, $cricleTwo)) ;




?>