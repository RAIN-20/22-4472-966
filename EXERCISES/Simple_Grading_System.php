
<?php

echo "<h3>10. Simple Grading System</h3>";
$math = 85;
$english = 90;
$science = 80;

// Compute the average
$average = ($math + $english + $science) / 3;

// Determine the grade
if ($average >= 90) {
    $grade = "A";
} elseif ($average >= 80) {
    $grade = "B";
} elseif ($average >= 70) {
    $grade = "C";
} elseif ($average >= 60) {
    $grade = "D";
} else {
    $grade = "F";
}

echo "Math: $math, English: $english, Science: $science<br>";
echo "Average: " . round($average, 2) . "<br>";
echo "Grade: $grade<br><br>";

?>