<?php
include ('ComparableCricle.php') ;

$circleOne = new ComparableCircle('circleOne',8);
$circleTwo = new ComparableCircle('circleTwo',2);
 echo ($circleOne->CompareTo($circleTwo)) ;



?>