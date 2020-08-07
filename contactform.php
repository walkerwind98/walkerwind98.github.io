<?php

if (isset($_POST['submit'])){
$name = $_POST['name'];
$subject = $_POST['subject'];
$mailFrom = $_POST['mail'];
$message = $_POST['message'];


    if (($name=="")||($mailFrom=="")||($message==""))
        {
        echo "All fields are required, please fill <a href=\"\">the form</a> again.";
        }
    else{        
        $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
        mail("walkerwind98@gmail.com", $subject, $message, $from);
        echo "Email sent!";
        }
    }  

?>