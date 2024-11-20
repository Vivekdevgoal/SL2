<?php
$a = readline("Enter the first number: ");
$b = readline("Enter the second number: ");
$c = readline("Enter the third number: ");
if (is_numeric($a) && is_numeric($b) && is_numeric($c)) {
$largest = ($a >= $b)
? (($a >= $c) ? $a : $c)
: (($b >= $c) ? $b : $c);
echo "The largest number is: $largest\n";
} else {
echo "Please enter valid numbers.\n";
}
?>