<?php

if(isset($_POST["submit"])) {
    $name=$_POST["name"];
    $subject=$_POST["subject"];
    $mailFrom=$_POST["mail"];
    $message=$_POST["message"];

	$mailTo="himanshudayma@thelectureroom.in";
	$headers = "From: ".$mailFrom;
	$text = "Mail recieved from ".$name."\n".$message;

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($name, $subject, $text, $headers);
    header("Location: index.html?mailsend");
}
?>