
<?php

echo "<h3>12. Travel Cost Estimator</h3>";
$distance = 150; // in kilometers
$fuel_consumption = 12; // kilometers per liter
$fuel_price = 1.5; // price per liter

// Calculation
$liters_needed = $distance / $fuel_consumption;
$travel_cost = $liters_needed * $fuel_price;

// Display result
echo "Estimated travel cost for {$distance} km is: " . number_format($travel_cost, 2);


?>