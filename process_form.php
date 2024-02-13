<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $do_you = $_POST["do-you"];
    $how = $_POST["how"];
    $what = implode(", ", $_POST["what"]);
    $comment = $_POST["comment"];

    // Email configuration
    $to = "fayruzhilmy@gmail.com";
    $subject = "Form Submission - Valentine Survey";
    $message = "Do you want to be my valentine? $do_you\n";
    $message .= "Rate how much you love to be my valentine: $how\n";
    $message .= "What do you want in Valentine's gifts: $what\n";
    $message .= "Thoughts on spending Valentine's Day with me: $comment\n";

    // Send email
    mail($to, $subject, $message);

    // Redirect after submission
    header("Location: submission.html");
    exit;
} else {
    // Redirect if accessed directly
    header("Location: error.html");
    exit;
}
?>
