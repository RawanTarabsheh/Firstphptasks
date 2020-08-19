<!DOCTYPE html>
<html>
<head>
	<title>Q2</title>
</head>
<body>
<h1>Q2:Write a function to check whether a number is prime or not ?</h1>
<?php
function checkprime ($number)
{
	if($number <= 0)
		return 0;
	elseif ($number == 1) 
		return 0;
	for($i=2 ; $i<$number ; $i++)
	{
		if($number % $i == 0)
		{
			return 0;
		}
	}
	return 1;
}

$flag=checkprime(5);
echo "Check number for 5 <br>";
if($flag==1)
	echo "The number is prime <br>";
else
	echo "The number is not Prime <br>";
echo "<br><br>";
/////////////
$flag=checkprime(1);
echo "Check number for 1 <br>";
if($flag==1)
	echo "The number is prime <br>";
else
	echo "The number is not Prime <br>";
echo "<br><br>";
////////////////
$flag=checkprime(-5);
echo "Check number for -5 <br>";
if($flag==1)
	echo "The number is prime <br>";
else
	echo "The number is not Prime <br>";
echo "<br><br>";

//////////
$flag=checkprime(4);
echo "Check number for 4 <br>";
if($flag==1)
	echo "The number is prime <br>";
else
	echo "The number is not Prime <br>";
echo "<br><br>";
?>
</body>
</html>