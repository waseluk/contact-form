<?php
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from ='';
    $email_subject = "new form submission";
    $email_body = "User Name: $name.\n".
                    "User Phone: $phone.\n".
                        "User Email: $visitor_email.\n".
                            "User Message: $message.\n";
$to = "thomaswasels@gmail.com";
$header = "From: $ email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");

?>