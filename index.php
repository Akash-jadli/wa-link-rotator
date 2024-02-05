<?php

// Array of phone numbers
$phoneNumbers = [
    '917566566522', // Add more numbers as needed
    '123456789',
	'888880990',
    // Add more numbers as needed
];

// Generate a random text for the URL
$randomText = generateRandomText();

// Get a random phone number from the array
$randomPhoneNumber = $phoneNumbers[array_rand($phoneNumbers)];

// Build the WhatsApp API URL
$whatsappUrl = "https://api.whatsapp.com/send?phone={$randomPhoneNumber}&text=hi";

// Redirect to the WhatsApp API URL
header("Location: $whatsappUrl");
exit;

function generateRandomText($length = 4) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomText = '';
    for ($i = 0; $i < $length; $i++) {
        $randomText .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomText;
}
?>
