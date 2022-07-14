<?php

$companyname = $_POST['company_name'];
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = "jiashengyeap@gmail.com";

$email_subject = "New Form Submission";

$email_body =   "Company Name: $companyname.\n".
                "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "User Message: $message.\n".

$to = "jiashengyeap@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");

?>