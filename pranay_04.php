<?php
function displayMenu() {
    echo "Calculator Menu:\n";
    echo "1. Addition\n";
    echo "2. Subtraction\n";
    echo "3. Multiplication\n";
    echo "4. Division\n";
    echo "5. Exit\n";
}

function calculate($choice, $num1, $num2) {
    switch ($choice) {
        case 1:
            return $num1 + $num2;
        case 2:
            return $num1 - $num2;
        case 3:
            return $num1 * $num2;
        case 4:
            if ($num2 == 0) {
                return "warning! Division by zero is not allowed.";
            } else {
                return $num1 / $num2;
            }
        default:
            return "Invalid choice!";
    }
}
do {
    displayMenu();
    $choice =readline("Enter your choice:");

    if ($choice == 5) {
        echo "Exiting the program...\n";
        break;
    }

    $num1 = readline("Enter first number: ");

    $num2 = readline("Enter second  number: ");

    $result = calculate($choice, $num1, $num2);
    echo "Result: $result\n\n";
    
}while($choice!= 5);

?>
