<!DOCTYPE html>
<html>
<head>
	<title>Q5</title>
</head>
<body>
	<h1>Q5:Write a PHP function that checks whether a string is all lowercase?</h1>
	<?php
	function checklowercase ($string)
	{
		$leng=strlen($string);
		for($i=0;$i<$leng;$i++)
		{
			$lowercase =  preg_match('#[a-z]#', $string[$i]);
			if(!$lowercase)
				return 0;
		}
		return 1;
	}

	$string="rawan";
	echo "Check rawan";
	$result=checklowercase($string);
	if($result==0)
		echo "<br>String Not In LowerCase<br>";
	else
		echo "<br>String  In LowerCase<br>";


/////
	$string="Rawan";
	echo "Check rawan";
	$result=checklowercase($string);
	if($result==0)
		echo "<br>String Not In LowerCase<br>";
	else
		echo "<br>String  In LowerCase<br>";
	?>
</body>
</html>