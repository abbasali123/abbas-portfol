<?php
// Get data from form 
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];
 
$to = "abbasashraff12313@gmail.com";
 
// The following text will be sent
// Name = user entered name
// Email = user entered email
// Message = user entered message
$txt ="Name = ". $fname . "\r\n  Email = "
    . $email . "\r\n Message =" . $message;
 
$headers = "From: noreply@demosite.com" . "\r\n" .
            "CC: somebodyelse@example.com";
if($email != NULL) {
    @mail($to, $subject, $txt, $headers);
}
 

?>