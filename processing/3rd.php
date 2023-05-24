<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['vendor'])) {
        $vendor = $_POST['vendor'];
        switch ($vendor) {
            case 'google':
                header('Location: /processing/3rd/google-pay.php');
                exit;
            case 'apple':
                header('Location: /processing/3rd/apple-pay.php');
                exit;
            case 'paypal':
                header('Location: /processing/3rd/paypal.php');
                exit;
            default:
                // Handle unknown vendor selection
                break;
        }
    } else {
        // Handle case where no vendor is selected
    }
} else {
    // Handle case where form is not submitted
}
?>
