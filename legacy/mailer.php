<?php
if(isset($_POST['submit'])) {
$to = "andrewqtran@gmail.com";
$subject = "Feedback from Website";
 
// data the visitor provided
$name_field = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email_field = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$comment = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
 
//constructing the message
$body = " From: $name_field\n\n E-Mail: $email_field\n\n Message:\n\n $comment";
 
// ...and away we go!
$send_contact=mail($to, $subject, $body);
 
// redirect to confirmation
if($send_contact){
echo "Thanks";
}
else {
echo "ERROR";
}
} else {
//nothing here to see
}
?>
