<?php
function swapByValue($str1, $str2)
{
    $temp = $str1;
    $str1 = $str2;
    $str2 = $temp;
    echo "Inside swapByValue:\n";
    echo "String 1: $str1\n";
    echo "String 2: $str2\n";
}
function swapByReference(&$str1, &$str2)
{
    $temp = $str1;
    $str1 = $str2;
    $str2 = $temp;
    echo "Inside swapByReference:\n";
    echo "String 1: $str1\n";
    echo "String 2: $str2\n";
}
$str1 = readline("Enter the first string: ");
$str2 = readline("Enter the second string: ");
// Call by Value
echo "\nSwapping using Call by Value:\n";
echo "Original values:\n";
echo "String 1: $str1\n";
echo "String 2: $str2\n";
swapByValue($str1, $str2);
echo "After swapping in main:\n";
echo "String 1: $str1\n"; // Original value remains unchanged
echo "String 2: $str2\n"; // Original value remains unchanged
// Call by Reference
echo "\nSwapping using Call by Reference:\n";
echo "Original values:\n";
echo "String 1: $str1\n";
echo "String 2: $str2\n";
swapByReference($str1, $str2);
echo "After swapping in main:\n";
echo "String 1: $str1\n"; // Value is changed
echo "String 2: $str2\n"; // Value is changed
?>