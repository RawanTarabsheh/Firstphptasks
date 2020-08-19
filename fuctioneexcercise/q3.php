<!DOCTYPE html>
<html>
<head>
	<title>Q3</title>
</head>
<body>
<h1>Q3:Write a function to reverse a string?</h1>
<?php
function reversestr ($str)
{
$len=strlen($str);
$arr=array();
for($i=($len-1);$i>=0;$i--)
{
	$arr[]=$str[$i];
}

return $arr;
}
echo "<br>The reverse function for Rawan<br>"; 
$string="rawan";
$array= reversestr ($string);
echo implode("",$array);


echo "<br>The reverse function for Ahmad <br>"; 
$string="Ahmad";
$array= reversestr ($string);
echo implode("",$array);
?>
</body>
</html>