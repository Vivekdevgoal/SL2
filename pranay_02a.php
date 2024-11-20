<?php
echo "Enter the first number: ";
$number1 = trim(fgets(STDIN));

echo "Enter the second number: ";
$number2 = trim(fgets(STDIN));

echo "Enter the third number: ";
$number3 = trim(fgets(STDIN));

$largest = ($number1 >= $number2) ? 
           (($number1 >= $number3) ? $number1 : $number3) : 
           (($number2 >= $number3) ? $number2 : $number3);

echo "The largest number is: $largest\n";
?>
