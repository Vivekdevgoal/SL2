<?php
do {
echo "Simple Calculator\n";
echo "1. Addition\n";
echo "2. Subtraction\n";
echo "3. Multiplication\n";
echo "4. Division\n";
echo "5. Exit\n";
$choice = readline("Choose an operation (1-5): ");
if ($choice >= 1 && $choice <= 4) {
$num1 = readline("Enter the first number: ");
$num2 = readline("Enter the second number: ");
if (is_numeric($num1) && is_numeric($num2)) {
switch ($choice) {
case 1:
$result = $num1 + $num2;
echo "Result: $num1 + $num2 = $result\n";
break;
case 2:
$result = $num1 - $num2;
echo "Result: $num1 - $num2 = $result\n";
break;
case 3:
$result = $num1 * $num2;
echo "Result: $num1 * $num2 = $result\n";
break;
case 4:
if ($num2 != 0) {
$result = $num1 / $num2;
echo "Result: $num1 / $num2 = $result\n";
} else {
echo "Error: Division by zero is not allowed.\n";
}
break;
}
} else {
echo "Please enter valid numbers.\n";
}
} elseif ($choice == 5) {
echo "Exiting the calculator. Goodbye!\n";
} else {
echo "Invalid choice. Please choose a valid operation.\n";
}
} while ($choice != 5);
?>
Out