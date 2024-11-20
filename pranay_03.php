<?php
$positiveCount = 0;
$negativeCount = 0;
$zeroCount = 0;

do {
    // Get the user input
    $input = readline("Enter a number (or type 'stop' to finish): ");

    // Check if the user wants to stop
    if (strtolower($input) == 'stop') {
        break;
    }

    // Convert the input to a number
    $number = (float)$input;

    // Determine if the number is positive, negative, or zero
    if ($number > 0) {
        $positiveCount++;
    } elseif ($number < 0) {
        $negativeCount++;
    } else {
        $zeroCount++;
    }
} while (true);

echo "Positive numbers entered: $positiveCount\n";
echo "Negative numbers entered: $negativeCount\n";
echo "Zeros entered: $zeroCount\n";
?>
