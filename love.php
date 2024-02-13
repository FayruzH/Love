<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $do_you = $_POST['do-you'] ?? '';
    $how_much = $_POST['how'] ?? '';
    $what = $_POST['what'] ?? '';
    $comment = $_POST['comment'] ?? '';

    // Email information
    $to = 'fayruzhilmy@gmail.com';
    $subject = 'New Valentine\'s Day Submission';
    $message = "Do you want to be my valentine? $do_you\n";
    $message .= "Rate how much you love to be my valentine: $how_much\n";
    $message .= "What do you want in Valentine: $what\n";
    $message .= "Comment: $comment\n";

    // Send email
    mail($to, $subject, $message);

    // Redirect back to the form after submission
    header('Location: submission.html');
    exit;
}
?>
