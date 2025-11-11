
<?php

echo "<h3>8. String Manipulation</h3>";
$sentence = "The quick brown fox jumps over the lazy dog.";
echo "Number of characters: " . strlen($sentence) . "<br><br>";
echo "Number of words: " . str_word_count($sentence) . "<br><br>";
echo "Uppercase: " . strtoupper($sentence) . "<br><br>";
echo "Lowercase: " . strtolower($sentence) . "\n\n";

?>