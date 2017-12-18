
<?php

//Naudojamos vidinės funkcijos
$a = array(5, 6, 10, 15);
$b =array(8,5, 3, 25);


$a = array_filter($a);
$average = array_sum($a)/count($a);

 
$b = array_filter($b);
$average1 = array_sum($b)/count($b);

echo ($average1 - $average);



?>