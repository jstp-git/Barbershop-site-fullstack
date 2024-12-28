

<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);

// Debug: Print all submitted data
echo "<h1>Submitted Data:</h1>";
echo "<pre>";
print_r($_POST);
echo "</pre>";

// Safely access fields
$service = $_POST["serviceSelection"] ?? "No service selected";
$barber = $_POST["SelectBarber"] ?? "No barber selected";
$date = $_POST["date"] ?? "No date selected";
$time = $_POST["time"] ?? "No time selected";
$fname = $_POST["fname"] ?? "No name provided";
$phone = $_POST["phone"] ?? "No phone provided";
$email = $_POST["email"] ?? "No email provided";
$cemail = $_POST["cemail"] ?? "No confirmation email provided";
$notes = $_POST["notes"] ?? "No notes provided";
$cardtype = $_POST["cardtype"] ?? "No card type selected";
$cardnumber = $_POST["cardnumber"] ?? "No card number provided";
$edate = $_POST["Edate"] ?? "No expiry date provided";
$cvc = $_POST["cvc"] ?? "No CVC provided";

// Output the data
echo "<h2>Booking Details:</h2>";
echo "Service: $service<br>";
echo "Barber: $barber<br>";
echo "Date: $date<br>";
echo "Time: $time<br>";
echo "Name: $fname<br>";
echo "Phone: $phone<br>";
echo "Email: $email<br>";
echo "Confirm Email: $cemail<br>";
echo "Notes: $notes<br>";
echo "Card Type: $cardtype<br>";
echo "Card Number: $cardnumber<br>";
echo "Expiry Date: $edate<br>";
echo "CVC: $cvc<br>";
?>
