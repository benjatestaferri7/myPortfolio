<?php
$sender = $_POST['email'];
$addressee = 'benjamintestaferrig@gmail.com';
$asunto = 'msg'; 
if (!$_POST){
}

else{
	 
    $body = "Full Name: " . $_POST["name"] . "\r\n"; 
    $body .= "Email: " . $_POST["email"] . "\r\n";
	$body .= "msg: " . $_POST["msg"] . "\r\n";

    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$_POST['name']."\" <".$sender.">\n";

    mail($addressee, $asunto, $body, $headers);
    
    header("location: index.php");
}
