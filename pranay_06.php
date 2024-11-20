<?php
function processArray($inputArray) {
    $outputArray = array(); 
    
    foreach ($inputArray as $number) {
        if ($number % 2 == 0) {
            $outputArray[] = $number / 2;
        } 
        else {
            $outputArray[] = $number * 3;
        }
    }
    
    return $outputArray;
}

$input = readline("Enter a list of integers separated by commas: ");

$inputArray = array_map('intval', explode(',', $input));

$resultArray = processArray($inputArray);

echo "Input Array: ";
print_r($inputArray);

echo "Processed Array: ";
print_r($resultArray);
?>
