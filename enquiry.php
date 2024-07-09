<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $car_model = $_POST['car_model'];
  $message = $_POST['message'];

  $to = "preeshasheth@gmail.com";
  $subject = "New Car Enquiry from " . $name;
  $body = "You have received a new enquiry.\n\n" .
          "Name: $name\n" .
          "Phone: $phone\n" .
          "Email: $email\n" .
          "Car Model: $car_model\n" .
          "Message: $message\n";
  $headers = "From: no-reply@example.com";

  if (mail($to, $subject, $body, $headers)) {
    echo "Thank you for your enquiry. We will get back to you soon.";
  } else {
    echo "Sorry, something went wrong. Please try again later.";
  }
}
?>
