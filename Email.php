	<?php
if($_POST["submit"]) {
    $recipient="mpluney@gmail.com"; //Enter your mail address
    $subject="Contact from Website"; //Subject 
    $sender=$_POST["name"];
    $email=$_POST["email"];
    $message=$_POST["message"];
    $mailBody="Name: $sender\nEmail Address: $email\n\nMessage: $message";
    mail($recipient, $subject, $mailBody);
    sleep(1);
//    header("Location:http://blog.antonyraphel.in/sample/"); // Set here redirect page or destination page
}
?>