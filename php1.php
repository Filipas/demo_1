
<?php


$a = array(5, 6, 10, 15);
$b =array(8,5, 3, 25);

//Naudojamos vidinės funkcijos

$a = array_filter($a);
$average = array_sum($a)/count($a);

 
$b = array_filter($b);
$average1 = array_sum($b)/count($b);

echo ($average1 - $average);


function vidurkis($a) {
 return array_sum($a) / count($a);
}
function vidurkis2($b) {
 return array_sum($b) / count($b);
}

echo (vidurkis($a) - vidurkis2($b));


?>