<?php
function calculateNetAmount($quantity, $rate)
{
    $totalAmount = $quantity * $rate;
    $discount = 0;
    if ($quantity > 100) {
        $discount = 0.10 * $totalAmount;
        $totalAmount -= $discount;
    }
    return [$totalAmount, $discount];
}
$quantity = readline("Enter the quantity purchased: ");
$rate = readline("Enter the rate per quantity: ");
if (is_numeric($quantity) && is_numeric($rate) && $quantity > 0 && $rate > 0) {
    list($netAmount, $discount) = calculateNetAmount($quantity, $rate);
    echo "Total amount before discount: $" . number_format($quantity * $rate, 2) . "\n";
    echo "Discount applied: $" . number_format($discount, 2) . "\n";
    echo "The net amount is: $" . number_format($netAmount, 2) . "\n";
} else {
    echo "Please enter valid positive numbers for quantity and rate.\n";
}
?>