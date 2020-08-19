<!DOCTYPE html>
<html>
<head>
<title>Q4</title>
</head>
<body>
<h1>Q4:Write a function to sort an array?</h1>
<?php
echo "sort ascending <br>";
function sortarray ($array,$counter)
{
	$narray=array();
   for($i=0;$i<=$counter;$i++)
   {
   	if(count($array)==0)break;
   	$minkey=array_search(min($array), $array);
   	$narray[$i]=min($array);
	unset($array[$minkey]);

   }
   return $narray;
}
$array=array(2,10,8,6,5,0);
$counter=count($array);
$array =sortarray($array,$counter);
foreach ($array as $value) {
echo $value.' , ';
}
?>




<h1>Q4:Write a function to sort an array deasending?</h1>
<?php
echo "sort descending <br>";
function sortarrayde ($array,$counter)
{
	$narray=array();
   for($i=0;$i<=$counter;$i++)
   {
   	if(count($array)==0)break;
   	$maxkey=array_search(max($array), $array);
   	$narray[$i]=max($array);
	unset($array[$maxkey]);

   }
   return $narray;
}
$array=array(2,10,8,6,5,0);
$counter=count($array);
$array =sortarrayde($array,$counter);
foreach ($array as $value) {
echo $value.' , ';
}
?>
</body>
</html>