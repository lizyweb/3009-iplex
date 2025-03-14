<?php

$firstname = stripcslashes($_POST['firstname']);
$secondname = stripcslashes($_POST['secondname']);
$email = stripcslashes($_POST['email']);
$phone = stripcslashes($_POST['phone']);
$companyname = stripcslashes($_POST['companyname']);
$companywebsite = stripcslashes($_POST['companywebsite']);
$timings = stripcslashes($_POST['timings']);
$comments = stripcslashes($_POST['comments']);

if(trim($firstname) == '') {
    echo '<div class="error_message">Attention! You must enter your first name.</div>';
    exit();
}  
else if(trim($secondname) == '') {
    echo '<div class="error_message">Attention! You must enter your second name.</div>';
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
else if(trim($companyname) == '') {
    echo '<div class="error_message">Attention! Please enter your company name.</div>';
    exit();
} 
else if(trim($companywebsite) == '') {
    echo '<div class="error_message">Attention! Please enter your company website.</div>';
    exit();
} 
else if(trim($timings) == '') {
    echo '<div class="error_message">Attention! Please enter the timings.</div>';
    exit();
} 
else if(trim($comments) == '') {
    echo '<div class="error_message">Attention! Please enter your message.</div>';
    exit();
}

$to = "info@iplextechnologies.in";
$subject = 'You\'ve been contacted by ' . $firstname . ' ' . $secondname . '.';
$msg = "First Name: ".$firstname."\n\nSecond Name: ".$secondname."\n\nEmail: ".$email."\n\nPhone: ".$phone."\n\nCompany Name: ".$companyname."\n\nCompany Website: ".$companywebsite."\n\nProducts: ".$timings."\n\nComments:\n".$comments;
$headers = "From: $email";

if(mail($to, $subject, $msg, $headers)) {
    // Email has sent successfully, echo a success page.
    echo "<fieldset>";
    echo "<div id='success_page'>";
    echo "<h1>Your Message Sent Successfully.</h1>";
    echo "<p>Thank you <strong>$firstname $secondname</strong>, your message has been submitted to us. We will contact you shortly.</p>";
    echo "</div>";
    echo "</fieldset>";

    echo '<a href="index.html">Return to Home</a>';
} 
else {
    echo 'ERROR!';
}
?>