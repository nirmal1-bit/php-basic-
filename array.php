<?php
$fruits = ["Apple","Banana","Mango"];
echo implode(", ", $fruits)."<br>";

//aple,banana,pear

$fruits[] = "Orange"; 
print_r($fruits); echo "<br>";

unset($fruits[1]); 
print_r($fruits); echo "<br>";
?>
