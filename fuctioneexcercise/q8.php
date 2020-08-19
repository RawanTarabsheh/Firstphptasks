<!DOCTYPE html>
<html>
<head>
	<title>Q8</title>
</head>
<body>
	<h1>Q8:You have 3 parameters for hotel reservation system (gender, age, weight)</h1>
	<?php
	function reservation ($gender,$age,$weight)
	{
		if($age <= 18 && $gender=="child" )
		{
			$result= childfun($weight);
			return $result;
		}
		else
		{

			if($gender=="female")
			{
				$result= FemalFun($weight);
				return $result;

			}
			elseif($gender=="male")
			{
				$result= MaleFun($weight);
				return $result;

			}
			else
				return "Error Data";
		}

	}
	function MaleFun($weight)
	{
		if($weight>70)
		{
			$cal= 70+(($weight-70)*0.5);
			return $cal."$";
		}
		else
			return "70$";
	}
	function FemalFun($weight)
	{
		if($weight>50)
		{
			$cal= 75+(($weight-50)*0.5);
			return $cal."$";
		}
		else
			return "75$";
	}
	function childfun($weight)
	{
		return "20$";
	}


	echo "<br>Price if Femal and age 20 and weight 70 is:<br>";
	echo reservation("female",20,70);
	echo "<br>Price if male and age 30 and weight 100 is:<br>";
	echo reservation("male",30,100);
	echo "<br>Price if child and age 10 and weight 30 is:<br>";
	echo reservation("child",10,30);
	echo "<br>Price if Femal and age 20 and weight 70 is:<br>";
	echo reservation("kk",20,70);
	?>
</body>
</html>