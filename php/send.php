<?php
function sanitize_my_email($field)
{
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

$formSubject = 'From Portfolio';
$from_email = $_POST = ['email'];
$to_email = 'pierratonoc@gmail.com';

$message = 'This mail is sent using the PHP mail ';
$headers = 'From:'+$from_email;
//check if the email address is invalid $secure_check
$secure_check = sanitize_my_email($to_email);
if ($secure_check == false) {
    echo "Invalid input";
} else { //send email 
    mail($to_email, $subject, $message, $headers);
    echo "This email is sent using PHP Mail";
}
