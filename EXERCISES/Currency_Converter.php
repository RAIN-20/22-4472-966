
<?php

echo "<h3>11. Currency Converter</h3>";
$amount_php = 1000; // amount in PHP
$usd_rate = 0.018;  // PHP → USD
$eur_rate = 0.016;  // PHP → EUR
$jpy_rate = 2.70;   // PHP → JPY

$in_usd = $amount_php * $usd_rate;
$in_eur = $amount_php * $eur_rate;
$in_jpy = $amount_php * $jpy_rate;

echo "Amount in PHP: ₱$amount_php<br>";
echo "Converted to:<br>";
echo "USD: $" . round($in_usd, 2) . "<br>";
echo "EUR: €" . round($in_eur, 2) . "<br>";
echo "JPY: ¥" . round($in_jpy, 2) . "<br><br>";
?>