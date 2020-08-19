<!DOCTYPE html>
<html>
<head>
	<title>Q6</title>
</head>
<body>
<h1>Q6:Make a function to create encrypted text using Caesar Cipher(Straight Forward, complex)</h1>
<?php
function encryptCaesar ($pass)
{
$char=array_merge(range('a', 'z'),range('A', 'Z'));
echo "<pre>";
//print_r($char);
$newpass=array();

for ($i=0;$i<strlen($pass);$i++) {
	$charone=$pass[$i];
	$keychar=array_search($charone, $char);//original key
	
	if($keychar>48)
		$newkey=$keychar-48;
	else
		$newkey=$keychar+4;

	$newpass[]=$char[$newkey];	
}
return $newpass;
}

echo "<br>The encrypted text of apple is:<br>";
$pass="apple";
$newpass=encryptCaesar($pass);
echo implode('', $newpass)."<br>";


echo "<br>The encrypted text of RawAn is:<br>";
$pass="RawAn";
$newpass=encryptCaesar($pass);
echo implode('', $newpass)."<br>";
?>
</body>
</html>