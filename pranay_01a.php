<?php
// Function to check if a number is even or odd
function checkEvenOdd($number) {
    if ($number % 2 == 0) {
        echo "$number is an even number.\n";
    } else {
        echo "$number is an odd number.\n";
    }
}

// Taking user input
echo "Enter a number: ";
$number = trim(fgets(STDIN));

// Checking and printing whether the number is even or odd
checkEvenOdd($number);
?>
