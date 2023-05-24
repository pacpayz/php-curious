<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve form data
  $email = $_POST['email'];
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $phoneNumber = $_POST['phoneNumber'];
  $billingAddress = $_POST['billingAddress'];

  // Perform further processing or storage of the form data
  // ...

  // Redirect the user to select-payment.php
  header('Location: ../web/select-payment.php');
  exit();
} else {
  // Redirect to the form page if accessed directly without submitting the form
  header('Location: ../index.php');
  exit();
}
?>
