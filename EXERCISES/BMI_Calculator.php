
<?php

echo "<h3>7. BMI Calculator</h3>";
$weight = 70; // kg
$height = 1.75; // meters
echo "Weight = " . $weight . "<br><br>";
echo "Height = " . $height . "<br><br>";


$bmi = $weight / ($height * $height);
echo "BMI: " . round($bmi, 2) . "\n\n";


?>