<?php
// Replace with your email and Telegram API details
$to_email = "jamimuqumov@gmail";
$telegram_token = "6046278994:AAFnqeRomRUgM-mA558PAFDE6V60TOf_u1o";
$telegram_chat_id = "-1001617076580";

// Get the form data
$firstname = $_POST['firstname'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$comments = $_POST['comments'];

// Build the message
$message = "Name: " . $firstname . "\n\n";
$message .= "Address: " . $address . "\n\n";
$message .= "Phone: " . $phone . "\n\n";
$message .= "Email: " . $email . "\n\n";
$message .= "Comments: " . $comments . "\n\n";

// Send the message to email
$headers = 'From: ' . $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to_email, "New Form Submission", $message, $headers);

// Send the message to Telegram
$telegram_message = urlencode($message);
$telegram_url = "https://api.telegram.org/bot" . $telegram_token . "/sendMessage?chat_id=" . $telegram_chat_id . "&text=" . $telegram_message;
file_get_contents($telegram_url);

// Redirect to homepage
header("Location: /");
exit();
?>
