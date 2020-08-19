<!DOCTYPE html>
<html>
<head>
 <title></title>
</head>
<body>
<?php
$arrayName = array(2,10,70,33,50,"ff");// Declarations
echo count($arrayName).":" ."number of element <br>";
echo max($arrayName). ":" ."max number of value <br>";
echo min($arrayName). ":" . "min number of value <br> ";
sort($arrayName) ;
echo "sort array value asending <br>";
echo "<pre>";
print_r($arrayName)."<br>";
rsort($arrayName);

echo "sort array deasending <br> ";
print_r($arrayName)."<br>";

echo "implod fun convert array to string <br>";
$string=implode("|" , $arrayName);
echo $string."<br>";

echo "expload fun convert string to array <br>";
$array=explode("|", $string);
print_r($array)."<br>";

echo "in_array is a function return boolen if found or not <br>";
if(in_array(10, $arrayName))
echo "number 10 is in array<br>";
else
echo "not found number<br>";

if(in_array("ff", $arrayName))
echo "ff string is in array<br>";
else
echo "not found number<br>";


// associative array
$assarray = array('ahmad'  => 20,
                'rawan' => 30,
                'anas'  => 25 );

echo "associative array <br>";
print_r($assarray)."<br>";

echo "sort associative array asending <br>";
asort($assarray);
print_r($assarray)."<br>";

echo "sort associative array deasinding <br>";
arsort($assarray)."<br>";
print_r($assarray)."<br>";

echo "sort associative array asending depend on key<br>";
ksort($assarray);
print_r($assarray)."<br>";
echo "sort associative array deasinding depend on key<br>";
krsort($assarray);
print_r($assarray)."<br>";

echo "PHP array_change_key_case() Function<br>";
print_r(array_change_key_case($assarray,CASE_UPPER))."<br>";
print_r(array_change_key_case($assarray))."<br>";

echo "Remove duplicate values from an array using array_unique() : <br>";

$a=array("a"=>"red","b"=>"green","c"=>"red");
print_r(array_unique($a))."<br>";
echo "PHP array_values() Function Return all the values of an array (not the keys) :<br>";
$b=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");
print_r($b)."<br>";
print_r(array_values($b))."<br>";

echo "array_merge — Merge one or more arrays <br>";

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result)."<br>";

echo "PHP array_map() Function Send each value of an array to a function";

function myfunction($v)
{
  return($v*$v);
}

$a=array(1,2,3,4,5);
print_r(array_map("myfunction",$a))."<br>";


echo "Split an array into chunks of two <br>";
$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
print_r(array_chunk($cars,2))."<br>";

echo "PHP array_column() Function function returns the values from a single column in the input array.<br>";
$a = array(
  array(
    'id' => 5698,
    'first_name' => 'Peter',
    'last_name' => 'Griffin',
  ),
  array(
    'id' => 4767,
    'first_name' => 'Ben',
    'last_name' => 'Smith',
  ),
  array(
    'id' => 3809,
    'first_name' => 'Joe',
    'last_name' => 'Doe',
  )
);

$last_names = array_column($a, 'last_name');
print_r($last_names)."<br>";

echo "The array_combine() function creates an array by using the elements from one keys array and one values array.<br>";
$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");

$c=array_combine($fname,$age);
print_r($c)."<br>";

echo "PHP array_count_values() Function Count all the values of an array:<br> ";

$a=array("A","Cat","Dog","A","Dog");
print_r(array_count_values($a))."<br>";
echo "Compare the values of two arrays, and return the differences:<br>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_diff($a1,$a2);
print_r($result)."<br>";

echo "array_fill(start_index, num, value) Fill an array with values";
$a1=array_fill(3,4,"blue");
$b1=array_fill(0,1,"red");
print_r($a1);
echo "<br>";
print_r($b1);
echo "<br>";

echo "array_flip ";

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$result=array_flip($a1);
print_r($result);

echo "Send the values in an array to a user-defined function and return a string:<br>";
function myfunction2($v1,$v2)
{
return $v1 . "-" . $v2;
}
$a=array("Dog","Cat","Horse");
print_r(array_reduce($a,"myfunction2"));

?>
</body>
</html>