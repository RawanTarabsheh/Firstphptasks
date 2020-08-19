<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Draw First pattern</h3>
	<?php 
	for($i=0; $i<=5 ;$i++)
	{
		for($j=0;$j<=$i;$j++)
		{
			echo "*";
		}
		echo "<br/>";

	}
	?>
	<h3>Draw Second pattern</h3>
	<?php 
	$c=7;
	for ($i=0; $i <=7 ; $i++) { 
		echo "*";
		if($i==7)
		{
			echo "<br/>";
			for($j=0;$j<=$i ; $j++){
			for ($k=0; $k<$c;$k++)	 
			{	  
				echo "&nbsp;&nbsp;";	  
			}

			echo "*";
			echo "<br/>";
			$c--;
		}
		for ($i=0; $i <=7 ; $i++) { 
			echo "*";
		}
	}

		
	}

	?>
	<h3>Draw 3rd pattern</h3>
	<?php	
	$c=5;
	for ($i=0; $i<=5; $i++) 	       
	{ 	 
		for ($k=0; $k<$c; $k++)	 
		{	  
			echo "&nbsp;&nbsp;";	  
		}	
		for($j=0;$j<=$i;$j++)	  
		{	  	
			echo "*";	  
		}	
		$c--;
		echo "<br/>";	
	} 
	?>
	<h3>Draw 4rd pattern</h3>
	<?php  
	for($i=0;$i<=5;$i++)
	{  
		for($k=5;$k>=$i;$k--)
		{  
			echo "&nbsp;";  
		}  
		for($j=1;$j<=$i;$j++)
		{  
			echo "* ";  
		}  
		echo "<br>";  
	}  
	for($i=4;$i>=1;$i--)
	{  
		for($k=5;$k>=$i;$k--)
		{  
			echo "&nbsp;";  
		}  
		for($j=1;$j<=$i;$j++)
		{  
			echo "* ";  
		}  
		echo "<br>";  
	}  
	?>
</body>
</html>