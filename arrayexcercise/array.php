<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
$salary  = array( 'maisa' => 1001 ,
				  'quran' => 400,
				  'rawan' => 400,
				  'annas'  => 500,
				  'rasha' => 1500);
$i=0;
echo "<table border='3'>";
echo "<tr>";
echo "<td><b>Id</b></td>";
echo "<td>name</td>";
echo "<td>salary</td>";
echo "</tr>";
foreach ($salary as $key => $value) {
	$i++;

	echo "<tr>";
echo "<td>$i</td>";
echo "<td>$key</td>";
echo "<td>$value</td>";
echo "</tr>";
}
echo "</table>"
?>


<h3>Multi array</h3>
<?php
$Multi = array( array(1,"a",20),
				array(2,"b",30),
				array(3,"c",40)
				 );
			
echo "<pre>";
print_r($Multi);
echo "<br>";
echo $Multi[0][1]."<br>";
echo "using foreach <br>";

foreach ($Multi as $key => $value) {
	if(is_array($value))
	{
foreach ($value as $key1 => $value1)
{
	echo " ".$key1 .":" . $value1."<br>";
}
}//endif
else
{
	echo " ".$key .":" . $value."<br>";
}} //end 1st foreach

echo "using foreach assosiativ<br>";

foreach ($salary as $key => $value) {
	if(is_array($value))
	{
foreach ($value as $key1 => $value1)
{
	echo " ".$key1 .":" . $value1."<br>";
}
}//endif
else
{
	echo " ".$key .":" . $value."<br>";
}} //end 1st foreach

?>

</body>
</html>