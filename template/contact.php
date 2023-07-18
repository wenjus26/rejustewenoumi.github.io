<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Create a formatted string with the contact information
    $contactInfo = "Name: " . $name . "\n" .
                   "Email: " . $email . "\n" .
                   "Subject: " . $subject . "\n" .
                   "Message: " . $message . "\n\n";

    // Save the contact information to a text file
    $file = fopen("contact_info.txt", "a"); // Open the file in append mode
    fwrite($file, $contactInfo); // Write the contact information to the file
    fclose($file); // Close the file

    // Redirect the user back to the contact form or display a success message
    header("Location: index.html#contact"); // Replace "index.html" with the path to your contact form page
    exit();
}
?>
