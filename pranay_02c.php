<?php

echo "Enter the number of terms in the Fibonacci series: ";
$n = trim(fgets(STDIN));

// Initialize the first two terms of the Fibonacci series
$first = 0;
$second = 1;

// Check if the user wants more than 0 terms
if ($n <= 0) {
    echo "Please enter a positive integer.\n";
} else {
    echo "Fibonacci series up to $n terms:\n";
    
    // Print the first term if n is 1
    if ($n == 1) {
        echo $first . "\n";
    } else {
        echo $first . ", " . $second;
        
        // Calculate and print the remaining terms
        for ($i = 3; $i <= $n; $i++) {
            $next = $first + $second;
            echo ", " . $next;
            $first = $second;
            $second = $next;
        }
        
        echo "\n";
    }
}
?>
