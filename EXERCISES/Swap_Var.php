
<?php


echo "<h3>5. Swapping Variables</h3>";
$x = 5;
$y = 10;
echo "x = " . $x . "<br><br>";
echo "y = " . $y . "<br><br>";

$temp = $x;
$x = $y;
$y = $temp;

echo "After swapping: x = $x, y = $y\n\n";
?>