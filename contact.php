<?php

$name = stripcslashes($_POST['name']);
$email = stripcslashes($_POST['email']);
$phone = stripcslashes($_POST['phone']);
$subject = stripcslashes($_POST['subject']);
$comments = stripcslashes($_POST['comments']);

if(trim($name) == '') {
    echo '<div class="error_message">Attention! You must enter your name.</div>';
    exit();
}  
else if(trim($email) == '') {
    echo '<div class="error_message">Attention! Please enter a valid email address.</div>';
    exit();
} 
else if(trim($phone) == '') {
    echo '<div class="error_message">Attention! Please enter your phone.</div>';
    exit();
}
else if(trim($comments) == '') {
    echo '<div class="error_message">Attention! Please enter your message.</div>';
    exit();
}

$to = "info@iplextechnologies.in";
$subject = 'You\'ve been contacted by ' . $name . '.';
$msg = "Name: ".$name."\n\nEmail: ".$email."\n\nPhone: ".$phone."\n\nComments:\n".$comments;
$headers = "From: $email";

if(mail($to, $subject, $msg, $headers)) {
    // Email has sent successfully, echo a success page.
    echo "<fieldset>";
    echo "<div id='success_page'>";
    echo "<h1>Your Message Sent Successfully.</h1>";
    echo "<p>Thank you <strong>$name</strong>, your message has been submitted to us. We will contact you shortly.</p>";
    echo "</div>";
    echo "</fieldset>";

    echo '<a href="index.html">Return to Home</a>';
} 
else {
    echo 'ERROR!';
}
?>