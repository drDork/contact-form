<!DOCTYPE html> 
<html> 

<head> 

<link rel="stylesheet" type="text/css" href="style.css">

</head> 

<body> 

<div class="wrapper">

	<h1>Thank you for the suggestion!</h1>

  	<form method="post" action="process.php">
  		<table>
  			<tr>
  				<th><label for="name">Name</label></th>
  				<td><input type="text" id="name" name="name" /></td> 
  			</tr>

  			<tr>
  				<th><label for="email">Email</label></th>
  				<td><input type="text" id="email" name="email" /></td> 
  			</tr>

  			<tr>
  				<th><label for="suggestion">Suggestion</label></th>
  				<td><textarea name="suggestion" id="suggestion"></textarea></td> 
  			</tr>

  			<tr> 
  				<th></th> 
  				<td><input class="sendbtn" type="submit" value="Send" /></td> 
  			</tr> 

  		</table> 

  	</form>
  </div> 


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

$pageTitle = "Thank you"; 
$section = null;

?> 
</body> 

</html> 
