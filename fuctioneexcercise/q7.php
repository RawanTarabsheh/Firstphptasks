<!DOCTYPE html>
<html>
<head>
	<title>Q7</title>
</head>
<body>
<h1>Q7: Make Decryption text function the same method you use it in question (6)?</h1>
<?php

function Decryption ($pass)
{
$char=array_merge(range('a', 'z'),range('A', 'Z'));
echo "<pre>";
//print_r($char);
$newpass=array();

for ($i=0;$i<strlen($pass);$i++) {
	$charone=$pass[$i];
	$keychar=array_search($charone, $char);//original key
if($keychar<4)
		$newkey=$keychar+48;

	else
		$newkey=$keychar-4;
	
	$newpass[]=$char[$newkey];
	
}
return $newpass;
}

echo "<br>The encrypted text of apple is:<br>";
$pass="ettpi";
$newpass=Decryption($pass);
echo implode('', $newpass)."<br>";



echo "<br>The encrypted text of RawAn is:<br>";
$pass="VeAEr";
$newpass=Decryption($pass);
echo implode('', $newpass)."<br>";

?>
</body>
</html>