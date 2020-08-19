<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>The Sum Of The Number From 1 To 100</h3>
<?php 
$sum=0;
for ($i=0; $i<=100 ; $i++) { 
	$sum+=$i;
	if($sum >= 100)
		break;
	echo $i . ", ";
}
echo "<br><b>The Total is: ". $sum ."</b>";

?>
<h3>Write a php program that accepts a string and calculate the number of digits and letters </h3>
<?php 
$string="rawan125553";

if(is_string($string)==1)
{
	echo "The string is :". $string . "<br/>";
echo "It is a String Number Of Digit is: ".strlen($string). "<br/>";
 $letter=str_split($string);
 $let=0;
 $num=0;
 $arrlength=count($letter);
for($i=0 ; $i<$arrlength ; $i++)
{
	if(preg_match('#[0-9]#', $letter[$i]))
		$num+=1;
	elseif (preg_match('#[A-Za-z]#', $letter[$i])) {
		$let+=1;
	}
	
}
echo "Number Of Letters  ". $let . "<br/> Number Of Digit is:". $num;
}
else
{
	echo "Invalid Input It is not a string";
}

?>


<h3>Write php program to delete duplicated characters from string.</h3>
<?php
$duplicat ="Raaawannnn";
//$remove =count_chars($duplicat,3);
$remove= preg_replace("/(.)\\1+/i", "$1", $duplicat);
echo "<br>The String Befor Remove Duplicate : ". $duplicat;
echo " <br>The String After Remove Duplicate : ". $remove;
?>

<h3>Write a php program to check if the string from left to right is equal to string from right to left using  loop. </h3>

<?php
$str1="Rawan Tarabsheh";
$str2= strrev("hehsbaraT nawaR");
$arr1=str_split($str1);
$arr2=str_split($str2);
if(strlen($str1) != strlen($str2))
echo "Two String Not equal";
elseif ($str1=== $str2)
	echo "Tow String is from left to right is equal to string from right to left ";




?>

<h3> 1-1000 print all number can divide on 17</h3>
<?php
for ($i=1; $i <=1000 ; $i++) { 
	if(fmod($i,17) == 0 )
		echo $i . "<br>";
}

?>
</body>
</html>