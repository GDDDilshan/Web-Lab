<?php
    $units = 150; // enter the number of units consumed
    $bill = 0;
    if ($units <= 50) {
        $bill = $units * 3.50;
    } else if ($units > 50 && $units <= 100) {
        $bill = (50 * 3.50) + (($units - 50) * 4.00);
    } else if ($units > 100 && $units <= 150) {
        $bill = (50 * 3.50) + (50 * 4.00) + (($units - 100) * 5.20);
    } else {
        $bill = (50 * 3.50) + (50 * 4.00) + (50 * 5.20) + (($units - 150) * 6.50);
    }
    echo "The electricity bill for " . $units . " units is Rs. " . $bill;
?>
