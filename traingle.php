<?php
$a = 5; $b = 5; $c = 5;

if ($a + $b > $c && $b + $c > $a && $a + $c > $b) {
    echo "Valid Triangle<br>";

    if ($a == $b && $b == $c)
        echo "Equilateral Triangle";
    elseif ($a == $b || $b == $c || $a == $c)
        echo "Isosceles Triangle";
    else
        echo "Scalene Triangle";
} else {
    echo "Invalid Triangle";
}
?>
