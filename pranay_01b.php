<?php
// Function to calculate the net amount
function calculateNetAmount($quantity, $ratePerQuantity) {
    $grossAmount = $quantity * $ratePerQuantity;
    
    // Apply a 10% discount if quantity exceeds 100
    if ($quantity > 100) {
        $discount = $grossAmount * 0.10; // 10% discount
    } else {
        $discount = 0;
    }
    
    $netAmount = $grossAmount - $discount;
    return $netAmount;
}

// Taking user input for quantity and rate per quantity
echo "Enter the quantity purchased: ";
$quantity = (int)trim(fgets(STDIN));  // Casting input to integer

echo "Enter the rate per quantity: ";
$ratePerQuantity = (float)trim(fgets(STDIN));  // Casting input to float

// Calculating and printing the net amount
$netAmount = calculateNetAmount($quantity, $ratePerQuantity);
echo "The net amount is: $netAmount\n";
?>
