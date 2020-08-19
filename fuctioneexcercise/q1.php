<!DOCTYPE html>
<html>
<head>
	<title>Q1</title>
</head>
<body>
	<h1>Q1:Make a function to calculate N Factorial (recursive function )</h1>
	<?php 

	function factorialNum ($number)
	{
		if($number === 0)
			{
				return 1;
			}
		else
			{
				return $number * factorialNum($number-1);//calling it self
			}

	}
	echo "<br> factorial For 1 Number :  ";
	echo factorialNum(1);
	echo "<br>";
	echo "<br> factorial For 4 Number : ";
	echo factorialNum(4);
	echo "<br>";
	echo "<br> factorial For 5 Number : ";
	echo factorialNum(5);
	echo "<br>";
	echo "<br> factorial For 10 Number : ";
	echo factorialNum(10);


	?>

</body>
</html>