<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="checkgrade.php" method="post">
		Enter Your Grade :<input type="text" name="grade">
		<br><br>		
		<input type="submit" name="check" value="Check">
	</form>
<?php 

if(isset($_POST['check']) && isset($_POST['grade']))
	{
	$grade =$_POST["grade"];

if($grade>=90&&$grade<=100)
echo "<h2> Your Grade is: A </h2>";
elseif ($grade>=80&&$grade<=89)
echo "<h2> Your Grade is: B </h2>";
elseif ( $grade>=70&&$grade<=79)
echo "<h2> Your Grade is: C </h2>";
elseif ( $grade>=50&&$grade<=69)
echo "<h2> Your Grade is: D </h2>";
elseif($grade<50)
echo "<h2> Your Grade is: F </h2>";
else
echo "<h2> Out Of range </h2>";
}
?>
</body>
</html>