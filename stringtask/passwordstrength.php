<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div>
	<form action="passwordstrength.php" method="post">
		Enter Name :<input type="text" name="name">
		<br><br>
		Enter Password:<input type="Password" name="fpass">
		<br><br>
		Re-Enter Password:<input type="Password" name="spass">
		<br><br>
		<input type="submit" name="check">
	</form>
	<?php
	if(empty($_POST['name']))
	{
		echo "Empty name";
	}
	if(isset($_POST['check']) && isset($_POST['fpass']) && isset($_POST['name']) && isset($_POST['spass']))
	{
	
	 if($_POST["fpass"] == $_POST["spass"])
	 {
	 	$password =$_POST["fpass"];
	 	$uppercase = preg_match('#[A-Z]#', $password);
	 	$lowercase =  preg_match('#[a-z]#', $password);
	 	$number    = preg_match('#[0-9]#', $password);
	 	$specialChars = preg_match('#[^\w]#', $password);

	 	echo "welcom ". " " . $_POST["name"] . " ";

	 	if(strlen($password) <  8 || strlen($password)> 32)
	 		echo "The password must be between 8 and 16 characters long";
	 	else if ($uppercase ==0)
	 	echo " "." the password Must has Upper case characters"." ";
	    else if (!$lowercase)
	 	echo " "." the password Must has Lower case characters"." ";
	     else if (!$number)
        echo " "." the password Must has Number"." ";
        else if (!$specialChars) 
    	echo " "." the password Must has at least one special character"." ";
    	else
    		echo "Congratulations. Your password has been registered ";
    }	 
	 else
	 {
	 	echo "Password Not Match";
	 }

	}
	/*
 echo $_SERVER['SCRIPT_NAME'];
 echo("<BR>");
 echo $_SERVER['PHP_SELF'];*/
	?>
</div>
</body>
</html>