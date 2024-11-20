<?php
$positiveCount = 0;
$negativeCount = 0;
$zeroCount = 0;

do {
    $number = readline("Enter a number (or type 'exit' to finish): ");
    if (is_numeric($number)) {
        if ($number > 0) {
            $positiveCount++;
        } elseif ($number < 0) {
            $negativeCount++;
        } else {
            $zeroCount++;
        }
    } elseif (strtolower($number) === 'exit') {
        break;
    } else {
        echo "Please enter a valid number or 'exit' to finish.\n";
    }
} while (true);

echo "Count of positive numbers: $positiveCount\n";
echo "Count of negative numbers: $negativeCount\n";
echo "Count of zeros: $zeroCount\n";
?>
