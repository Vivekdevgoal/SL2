<?php
function swapByValue($str1, $str2) {
    $temp = $str1;
    $str1 = $str2;
    $str2 = $temp;

    echo "Inside swapByValue function: string1 = $str1, string2 = $str2\n"; 

    return [$str1, $str2];
}

function swapByReference(&$str1, &$str2) {
    $temp = $str1;
    $str1 = $str2;
    $str2 = $temp;

    echo "Inside swapByReference function: string1 = $str1, string2 = $str2\n"; 
}

$string1 = readline("Enter the first string: "); 
$string2 = readline("Enter the second string: "); 

$method = readline("Choose the swapping method (value/reference): "); 


if ($method === 'value') {
    swapByValue($string1, $string2);
    
    echo "After swapping by value (outside function): string1 = $string1, string2 = $string2\n";
} elseif ($method === 'reference') {
    swapByReference($string1, $string2);
    
    echo "After swapping by reference (outside function): string1 = $string1, string2 = $string2\n";
} else {
    echo "Invalid method chosen. Please select 'value' or 'reference'.\n";
}
?>
