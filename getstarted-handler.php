<?php 
$toemail = 'jeff@bigbrightsigns.com';
$fromemail = 'Big Bright Signs <jack@thefishcall.com>';
$name = $_POST['name']; 
$phonenumber = $_POST['number'];
$emailaddress = $_POST['email']; 
$plan = $_POST['plan'];
$comments = $_POST['comments']; 

$email_subject = "Big Bright Signs form submission: $name";
$email_body = "You've received a sign-up from $name.\n Here are the details:\n Name: $name\n Email: $emailaddress\n Phone Number: $phonenumber\n Plan: $plan\nAdditional Comments: $comments\n";
$headers = "From: $fromemail\r\n";
$headers .= "Reply-To: $emailaddress";

if ($_POST['submit']) {
    if (mail($toemail,$email_subject,$email_body,$headers)) { 

        echo "<script>setTimeout(\"location.href = 'thankyou.html';\",10);</script>";
    } else { 

        echo "<script>setTimeout(\"location.href = 'error.html';\",10);</script>";
    }
}



?>