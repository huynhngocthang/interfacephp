<?php
include_once 'Circle.php';
include_once 'Rectangle.php' ;
include_once 'Square.php' ;

$shapes[0] = new Circle('hình tròn',5) ;
$shapes[1] = new Rectangle('hình chữ nhật',5,10) ;
$shapes[2] = new Square('hình vuông',5) ;

foreach($shapes as $shape) {
 echo $shape . "<br>" ;
//  if($shape instanceof colorable) {
//      echo $shape . '<br>' ;
//  }
}



?>