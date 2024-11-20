<?php

echo "Enter a number: ";
$number = fgets(STDIN);

$sum = 0;

// Calculate the sum of digits
while ($number > 0) {
    $digit = $number % 10; // Get the last digit
    $sum += $digit; // Add the digit to the sum
    $number = (int)($number / 10); // Remove the last digit
}

// Output the result
echo "The sum of the digits is: $sum\n";
?>
