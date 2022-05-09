<!-- to get an enquiry in mail if someone fill the form -->
<?php
$name = $_POST['name'];  //this will save the name that will recieve from the content form
$visitor_email = $_POST['email']; //it'll store the visitors e-mail
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from = 'et.rcj@gndu.ac.in';
$email_subject = 'New form Submission';
$email_body = "User name: $name.\n".
              "User Email : $visitor_email.\n".
              "Subject: $subject.\n".
              "User Message: $message.\n";

$to = 'pooja123nisha@gmail.com';

$headers = "From: $email_from\r\n";

$headers .= "Reply-To: $visitor_email \r\n"

mail($to, $email_subject, $email_body,$headers);
header("Location: contact.html");
?> 