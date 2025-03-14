<?php

// Retrieve form data
$fullname = stripcslashes($_POST['fullname']);
$email = stripcslashes($_POST['email']);
$phone = stripcslashes($_POST['phone']);
$companyname = stripcslashes($_POST['companyname']);
$course = stripcslashes($_POST['course']);
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
else if(trim($companyname) == '') {
    echo '<div class="error_message">Attention! Please enter your company name.</div>';
    exit();
} 
else if(trim($course) == '') {
    echo '<div class="error_message">Attention! Please enter the course name.</div>';
    exit();
} 
else if(trim($comments) == '') {
    echo '<div class="error_message">Attention! Please enter your comments.</div>';
    exit();
}

// Email configuration
$to = "training@iplextechnologies.in";
$subject = 'Training Inquiry from ' . $fullname;

// Prepare email body
$msg = "Full Name: ".$fullname."\n\nEmail: ".$email."\n\nPhone: ".$phone."\n\nCompany Name: ".$companyname."\n\nCourse: ".$course."\n\nComments:\n".$comments;

// Prepare email headers
$headers = "From: $email";

// Send email
if(mail($to, $subject, $msg, $headers)) {
    // Email has sent successfully, echo a success page.
    echo "<fieldset>";
    echo "<div id='success_page'>";
    echo "<h1>Your Inquiry Has Been Submitted Successfully.</h1>";
    echo "<p>Thank you <strong>$fullname</strong>, your inquiry has been submitted to us. We will contact you shortly.</p>";
    echo "</div>";
    echo "</fieldset>";

    echo '<a href="index.html">Return to Home</a>';
} 
else {
    echo 'ERROR! There was an issue sending your inquiry.';
}

?>