<?php 
if (!empty($_POST)) {
    // Get the form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $luggage = $_POST['luggage'];
    $passengers = $_POST['passenger'];
    $start_dest = $_POST['start-dest'];
    $end_dest = $_POST['end-dest'];
    $ride_date = $_POST['ride-date'];
    $ride_time = $_POST['ride-time'];

    // Prepare the message for Telegram
    $token = '6046278994:AAFnqeRomRUgM-mA558PAFDE6V60TOf_u1o';
    $chat_id = '-1001617076580';
    $msg = "*New Taxi Booking Request*\n\n"
         . "Name: $name\n"
         . "Phone: $phone\n"
         . "Luggage: $luggage\n"
         . "Passengers: $passengers\n"
         . "Start Destination: $start_dest\n"
         . "End Destination: $end_dest\n"
         . "Date of Ride: $ride_date\n"
         . "Time of Ride: $ride_time\n";

    // Send the message to Telegram
    $url = "https://api.telegram.org/bot$token/sendMessage";
    $data = array('chat_id' => $chat_id, 'text' => $msg, 'parse_mode' => 'Markdown');
    $options = array('http' => array('method' => 'POST', 'header' => "Content-Type:application/x-www-form-urlencoded\r\n", 'content' => http_build_query($data)));
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    // Send the message to email
    $to = "jamimuqumov@gmail.com";
    $subject = "New Taxi Booking Request";
    $message = "Name: $name\n"
             . "Phone: $phone\n"
             . "Luggage: $luggage\n"
             . "Passengers: $passengers\n"
             . "Start Destination: $start_dest\n"
             . "End Destination: $end_dest\n"
             . "Date of Ride: $ride_date\n"
             . "Time of Ride: $ride_time\n";
    $headers = "From: jamimuqumov@gmail.com" . "\r\n" . "Reply-To: jamimuqumov@gmail.com" . "\r\n" . "X-Mailer: PHP/" . phpversion();
    mail($to, $subject, $message, $headers);

    // Show popup message and redirect
    echo '<script>alert("Thank you for your booking request! We will be in touch shortly."); window.location.href = "http://taxi.loc";</script>';
}
?>