<!DOCTYPE html> 
<html> 

<head> 
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Suggestions Wanted</title>
</head> 

<body> 

  <h1>Share something cool!</h1>

  <div class="wrapper">
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

	


</body> 

</html> 