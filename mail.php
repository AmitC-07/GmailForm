<?php
//get data from form  
$name = $_POST['fullName'];
$email = $_POST['Email'];
$subject = $_POST['Subject'];
$message = $_POST['Message'];

$to = "happy.mood.ac@gmail.com";
$subject = "Mail From website";
$txt = "Name = " . $name . "\r\n  Email = " . $email . "\r\n Subject =" . $subject . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
    "CC: somebodyelse@example.com";

if ($email != NULL) {
    mail($to, $subject, $txt, $headers);
}
//redirect
header("Location:thankyou.html");

// <form action="mail.php" method="post">
//     <label for="name">Your Name</label>
//     <input type="text"  name="name" placeholder="Your name..">
//     <label for="lname">Email</label>
//     <input type="email"  name="email" placeholder="Your email..">
   
//     <label for="message">Message</label>
//     <textarea  name="message" placeholder="Write something.." style="height:200px"></textarea>
//     <input type="submit" value="Submit">
//   </form>
