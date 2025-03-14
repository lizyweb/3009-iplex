<?php

// Retrieve form data
$fullname = stripcslashes($_POST['fullname']);
$email = stripcslashes($_POST['email']);
$phone = stripcslashes($_POST['phone']);
$qualification = stripcslashes($_POST['qualification']);
$institution = stripcslashes($_POST['institution']);
$graduationyear = stripcslashes($_POST['graduationyear']);
$comments = stripcslashes($_POST['comments']);

// Validate form data
if(trim($fullname) == '') {
    echo '<div class="error_message">Attention! You must enter your full name.</div>';
    exit();
}  
else if(trim($email) == '') {
    echo '<div class="error_message">Attention! Please enter a valid email address.</div>';
    exit();
} 
else if(trim($phone) == '') {
    echo '<div class="error_message">Attention! Please enter your phone number.</div>';
    exit();
} 
else if(trim($qualification) == '') {
    echo '<div class="error_message">Attention! Please enter your qualification.</div>';
    exit();
} 
else if(trim($institution) == '') {
    echo '<div class="error_message">Attention! Please enter your institution name.</div>';
    exit();
} 
else if(trim($graduationyear) == '') {
    echo '<div class="error_message">Attention! Please enter your graduation year.</div>';
    exit();
} 
else if(trim($comments) == '') {
    echo '<div class="error_message">Attention! Please enter your comments.</div>';
    exit();
}

// Email configuration
$to = "career@iplextechnologies.in";
$subject = 'New Application from ' . $fullname;

// Prepare email body
$msg = "Full Name: ".$fullname."\n\nEmail: ".$email."\n\nPhone: ".$phone."\n\nQualification: ".$qualification."\n\nInstitution: ".$institution."\n\nGraduation Year: ".$graduationyear."\n\nComments:\n".$comments;

// Prepare email headers
$headers = "From: $email";

// Send email
if(mail($to, $subject, $msg, $headers)) {
    // Email has sent successfully, echo a success page.
    echo "<fieldset>";
    echo "<div id='success_page'>";
    echo "<h1>Your Application Has Been Submitted Successfully.</h1>";
    echo "<p>Thank you <strong>$fullname</strong>, your application has been submitted to us. We will contact you shortly.</p>";
    echo "</div>";
    echo "</fieldset>";

    echo '<a href="index.html">Return to Home</a>';
} 
else {
    echo 'ERROR! There was an issue sending your application.';
}

?>