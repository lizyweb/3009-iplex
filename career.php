<?php

// Retrieve form data
$firstname = stripcslashes($_POST['firstname']);
$secondname = stripcslashes($_POST['secondname']);
$email = stripcslashes($_POST['email']);
$phone = stripcslashes($_POST['phone']);
$years = stripcslashes($_POST['years']);
$job = stripcslashes($_POST['job']);
$cv = $_FILES['cv'];

// Validate form data
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
else if(trim($years) == '') {
    echo '<div class="error_message">Attention! Please enter your years of experience.</div>';
    exit();
} 
else if(trim($job) == '') {
    echo '<div class="error_message">Attention! Please enter the job title.</div>';
    exit();
} 
else if(!isset($cv) || $cv['error'] !== UPLOAD_ERR_OK) {
    echo '<div class="error_message">Attention! Please upload your CV.</div>';
    exit();
}

// Email configuration
$to = "career@iplextechnologies.in";
$subject = 'Job Application from ' . $firstname . ' ' . $secondname;

// Prepare email body
$msg = "First Name: ".$firstname."\n\nSecond Name: ".$secondname."\n\nEmail: ".$email."\n\nPhone: ".$phone."\n\nYears of Experience: ".$years."\n\nJob Title: ".$job;

// Upload the CV file
$uploadDir = 'uploads/'; // Make sure this directory exists and has write permissions
$uploadFilePath = $uploadDir . basename($cv['name']);

// Check file type (optional)
$fileType = strtolower(pathinfo($uploadFilePath, PATHINFO_EXTENSION));
if(!in_array($fileType, ['pdf', 'doc', 'docx'])) {
    echo '<div class="error_message">Attention! Only PDF, DOC, or DOCX files are allowed for CV.</div>';
    exit();
}

// Move the uploaded file to the desired directory
if(move_uploaded_file($cv['tmp_name'], $uploadFilePath)) {
    $msg .= "\n\nCV: ".$uploadFilePath; // Append the CV file path to the email message

    // Prepare email headers
    $headers = "From: $email";

    // Send email
    if(mail($to, $subject, $msg, $headers)) {
        // Email has sent successfully, echo a success page.
        echo "<fieldset>";
        echo "<div id='success_page'>";
        echo "<h1>Your Application Has Been Submitted Successfully.</h1>";
        echo "<p>Thank you <strong>$firstname $secondname</strong>, your application has been submitted to us. We will contact you shortly.</p>";
        echo "</div>";
        echo "</fieldset>";

        echo '<a href="index.html">Return to Home</a>';
    } 
    else {
        echo 'ERROR! There was an issue sending your application.';
    }
} else {
    echo 'ERROR! There was an issue uploading your CV.';
}

?>