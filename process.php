<?php

$name = $_POST["name"]; 
$email = $_POST["email"];
$sug = $_POST["suggestion"];

echo "<pre>";
$email_body = ""; 
$email_body .= "Name: " . $name . "\n"; 
$email_body .= "Email: " . $email . "\n"; 
$email_body .= "Suggestion: " . $sug . "\n";
echo $email_body;
echo "</pre>";

// To Do: Send Email 
header("location:thanks.php");
?> 
