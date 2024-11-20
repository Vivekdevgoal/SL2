<?php
function transformArray($inputArray) {
$outputArray = [];
foreach ($inputArray as $number) {
if ($number % 2 == 0) {
$outputArray[] = $number / 2; // Divide even numbers by 2
} else {
$outputArray[] = $number * 3; // Multiply odd numbers by 3
}
}
return $outputArray;
}
// Accepting input from the user
$input = readline("Enter an array of integers separated by commas: ");
$inputArray = array_map('intval', explode(',', $input)); // Convert input string to an array of

$outputArray = transformArray($inputArray);
echo "Output Array: [" . implode(', ', $outputArray) . "]\n";
?>