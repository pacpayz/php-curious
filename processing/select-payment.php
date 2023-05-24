<?php
// Get the selected payment method from the form submission
$paymentMethod = $_POST['paymentMethod'];

// Redirect based on the selected payment method
if ($paymentMethod === 'card') {
    header("Location: /web/card.php");
    exit();
} elseif ($paymentMethod === 'crypto') {
    header("Location: /web/crypto.php");
    exit();
} elseif ($paymentMethod === 'other') {
    header("Location: /web/3rd.php");
    exit();
} else {
    // Handle the case when an invalid payment method is selected
    // You can display an error message or redirect to an error page
    echo "Invalid payment method selected.";
    // Example: Redirect to an error page
    // header("Location: /web/error.php");
    // exit();
}
?>
