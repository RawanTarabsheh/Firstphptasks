<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Q1: Write a PHP script to sort the following associative array ? </h1>
<?php 
$assarrname=array("Sophia"  => 31,
				  "Jacob"   => 41,
				  "William" => 39,
				  "Ramesh"  => 40);

	echo "a) ascending order sort by value  <br>";	
	asort($assarrname);
	echo "<pre>";
	print_r($assarrname). "<br>" ;

	echo "b) ascending order sort by Key <br>";
	ksort($assarrname);
	print_r($assarrname). "<br>" ;

	echo "c) descending order sorting by Value <br>";
	arsort($assarrname);
	print_r($assarrname). "<br>" ;

	echo "d) descending order sorting by Key ";
	krsort($assarrname);
	print_r($assarrname). "<br>" ;
?>

<h1>Q2: Write a PHP script to calculate and display average temperature, five lowest and highest temperatures? </h1>
<?php
$temperature = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75,76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);


//echo array_sum($temperature)/count($temperature); //another answer

echo "1- Average Temperature is  : <br>";
$sum=0;
$avg=0;
foreach ($temperature as  $value) {
	$sum+=$value;
}
$avg=$sum/count($temperature);
echo $avg ."<br>";

echo "2- List of seven lowest temperatures <br>";
sort($temperature);
$i=7;
foreach (array_unique($temperature) as $value) {
echo $value . ",";
$i--;
if($i==0)
break;
}

// another soultion
echo "<br> another soultion<br>";
$newarr=array_unique($temperature);
$stormin=array();
$counter=1;
foreach ($newarr as  $value) {
	if($counter>7)
		break;

$minval=array_search(min($newarr), $newarr);// return key(index) of min value
$stormin[]=min($newarr);
unset($newarr[$minval]);
$counter++;
}
echo "<br>";
print_r($stormin);
////////
echo "<br><br>";

echo "3- List of seven highest temperatures <br>";
rsort($temperature);
$j=7;
foreach (array_unique($temperature) as $value) {
echo $value . ",";
$j--;
if($j==0)
break;
}
//// anothe soultion
$newarrm=array_unique($temperature);
$maxvalu=array();
$counterm=1;
foreach ($newarrm as  $value) {
	if($counterm>7)
		break;
	$keymax=array_search(max($newarrm), $newarrm);
	$maxvalu[]=max($newarrm);
	unset($newarrm[$keymax]);
	$counterm++;
}
echo "<br><br>";
print_r($maxvalu);
////////
echo "<br>";
/*echo "<h4>4- Write a php variable to calculate occurrences of value in array </h4>";
echo "Value ". "" ."occurrences <br>";
print_r(array_count_values($temperature)). "<br>";*/

?>
<h1>Q3:Write a php variable to calculate occurrences of value in array</h1>
<?php

$arraych=array("a","a","a","b","a","e","a","a","b","a","f");
print_r(array_count_values($arraych)). "<br>";

?>
<h1>Q4:Write a PHP script to generate unique random numbers within a range? </h1>
<?php 
$n=range(11,30);
shuffle($n);

for ($x=0; $x< 10; $x++)
{
echo $n[$x].' ';
}
echo "\n";
?>
<?php

$temparr = array();


$n1=rand(11,30);
	for($i=0;$i<10;$i++){
		
		//array_push($temparr,rand(11,30));
		$temparr[$i]=rand(11,30);
		$removeduplicat=array_unique($temparr);
		if(sizeof($removeduplicat) != sizeof($temparr))
			$i--;//agin
}
echo "<pre>";
echo "<br>";
print_r($removeduplicat);
echo "<br>";


?>
<h1>Q5 :make password generator , that generate password from three array?</h1>
<?php
$leterarray=array_merge(range('a','z'), range('A','Z'));
$number=range(0,9);
$specialchar=range('!','?');
//array_splice($specialchar, array_search(0, $specialchar),1);// delete index [0]
array_splice($specialchar, array_search('0', $specialchar),1);// delete value 0
array_splice($specialchar, array_search('1', $specialchar),1);
array_splice($specialchar, array_search('2', $specialchar),1);
array_splice($specialchar, array_search('3', $specialchar),1);
array_splice($specialchar, array_search('4', $specialchar),1);
array_splice($specialchar, array_search('5', $specialchar),1);
array_splice($specialchar, array_search('6', $specialchar),1);
array_splice($specialchar, array_search('7', $specialchar),1);
array_splice($specialchar, array_search('8', $specialchar),1);
array_splice($specialchar, array_search('9', $specialchar),1);
array_splice($specialchar, array_search('<', $specialchar),1);
array_splice($specialchar, array_search('>', $specialchar),1);

$keylet=array_rand($leterarray,3);// retren key acoording number of element
$keyspec=array_rand($specialchar,3);
for($i=0 ;$i< 3; $i++)
{
	$passl[$i]=$leterarray[$keylet[$i]];
	$passn[$i]=array_rand($number,1);
	$passs[$i]=$specialchar[$keyspec[$i]];
	$pass1=array_unique($passl);
	$pass2=array_unique($passn);
	$pass3=array_unique($passs);
	if(sizeof($pass1)!=sizeof($passl) || sizeof($pass2) != sizeof($passn) || sizeof($pass3) != sizeof($passs))
		$i--;
}
$totalpass=array_merge($pass1,$pass2,$pass3);
shuffle($totalpass);
$leteruper=range("A", "Z");
shuffle($leteruper);
if(count($totalpass)== 9)
{
	if($totalpass[0]!= array_map("ucfirst",$totalpass))
		$totalpass[0]=$leteruper[0];

	$finalpass=implode("", $totalpass);
	echo $finalpass."<br>";
}

?>
<h1>micro time to print numbers</h1>
<?php
/*$start_time=microtime(true);
for($i=1 ; $i<10000;$i++){}
$end_time=microtime(true);
echo "The Time for 10.000 is  ".($end_time-$start_time)."<br>";
//////////////////////////////
$start_time=microtime(true);
for($i=1 ; $i<10000000;$i++){}
$end_time=microtime(true);
echo "The Time for 10.000.000 is  ".($end_time-$start_time)."<br>";
/////////////////////////////

$start_time=microtime(true);
for($i=1 ; $i<10000000000;$i++){}
$end_time=microtime(true);
echo "The Time for 10.000.000.000 is  ".($end_time-$start_time)."<br>";*/
/////////////////////////////
?>
<h1>Q7 :Write a code that re- writes the following array?</h1>
<?php 
$mainarray =array(array("id"  => 22,"name"=>"salameh", "Depatment"=>"IT"),
	              array("id" => 33, "name"=>"Anas" ,    "Depatment"=>"sales"),
	              array("id" => 44, "name"=>"ahamd",   "Depatment" =>"hr"));
print_r($mainarray);
$arryid= array();
$arrname=array();
$arrdep=array();
for($i=0;$i<count($mainarray) ; $i++)
{
array_push($arryid,$mainarray[$i]["id"]);
array_push($arrname,$mainarray[$i]["name"]);
array_push($arrdep,$mainarray[$i]["Depatment"]);
}
echo "another soultion <br>";
$ids = array_column($mainarray, 'id');
print_r($ids)."<br>";

/*foreach ($mainarray as $key => $value) {
	if(is_array($value))
	{
		foreach ($value as $key1 => $value1) {
			if($key1=="id")
				$arryid=$value1;
			elseif ($key1 == "name")
				$arrname=$value1;
			elseif ($key1== "Depatment")
				$arrdep=$value1;
		}
	}
}*/

echo "Array of id  is :  <br>";
print_r($arryid)."<br>"."<br>";
/////////
echo "another soultion <br>";
$names = array_column($mainarray, 'name');
print_r($names)."<br>";

echo "<br>Array of name  is :  <br>";
print_r($arrname)."<br>";
echo "<br>Array of name  is :  <br>";
print_r($arrdep)."<br>";
?>
</body>
</html>