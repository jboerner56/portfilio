
<?php

if($_POST["submit"]) {
    $recipient="jboerner56@gmail.com";
    $subject="Form to email message";
    $name=$_POST["name"];
    $email=$_POST["email"];
    $message=$_POST["message"];

    $content="Name: $name\nEmail: $email\n\n$message";

    mail($recipient, $subject, $content, "From: $name <$email>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>