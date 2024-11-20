<?php
$number = readline("Enter a number: ");
if (is_numeric($number) && $number >= 0) {
$sum = 0;
while ($number > 0) {
$digit = $number % 10; // Get the last digit
$sum += $digit; // Add it to the sum
$number = intval($number / 10); // Remove the last digit
}
echo "The sum of the digits is: $sum\n";
} else {
echo "Please enter a valid non-negative number.\n";
}
?>