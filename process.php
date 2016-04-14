<?php

$name = $_POST["name"]; 
$email = $_POST["email"];
$sug = $_POST["suggestion"];

echo "<pre>";
$email_body = ""; 
$email_body .= "Name " . $name . "\n"; 
echo "Email " . $email . "\n"; 
echo "Suggestion " . $sug . "\n";
echo "</pre>";

?> 