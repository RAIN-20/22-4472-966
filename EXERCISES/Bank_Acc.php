
<?php
echo "<h3>9. Bank Account Simulation</h3>";
$balance = 1000;
$deposit = 500;
$withdraw = 200;
echo "Balance: " . $balance . "<br><br>";
echo "Deposit: " . $deposit . "<br><br>";
echo "Withdraw: " . $withdraw . "<br><br>";


$balance = $balance + $deposit - $withdraw;
echo "Updated balance: $balance\n\n";

?>
