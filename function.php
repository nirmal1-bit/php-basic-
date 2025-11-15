<?php
function add($a,$b){
     return $a+$b;
     }

function factorial($n){ 
    $f=1; 
    for($i=1;$i<=$n;$i++) $f*=$i; 
    return $f; 
}


function reverseStr($str){ 
    return strrev($str); 
}
echo add(5,3)."<br>";
echo factorial(5)."<br>";
echo reverseStr("Hello")."<br>";
?>
