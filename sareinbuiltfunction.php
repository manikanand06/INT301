<?php
$cars=array("volvo","BMW","Audi");
$clength = count($cars);
sort($cars);
for($x=0;$x<$clength;$x++)
echo $cars[$x]." ";
rsort($cars);
for($x=0;$x<$clength;$x++)
echo $cars[$x]." ";
krsort($cars);             # krsort( $array, $sorting_type ) ex.SORT_NUMERIC,SORT_STRING
for($x=0;$x<$clength;$x++)
echo $cars[$x]." ";
print_r(array_values($cars));
echo substr("Hello world",0,5);  

?>


