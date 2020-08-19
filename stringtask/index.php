<?php
echo "Hello world <br>";
$name ="rawan  " ;
$last ="tarabsheh ";
echo "hello $name <br>";
echo 'hello $name <br>';
echo $name ." ".$last;

$out="hi";
$out .= "and welcome";
$out .= "HTU <br>";
echo $out ."<br>";

$firststring =" rawan hamdi mahmoud tarabsheh";

$secandString =" rawan hamdi 31 years old";

echo strtolower($firststring)."<br>";
echo strtoupper($firststring). "<br>";

echo ucfirst($firststring)."<br>";

echo ucwords($firststring)."<br>";

echo strlen($firststring) ."<br>";

echo ltrim($firststring) ." sapce <br>";

$findstr="strstr  " . strstr($firststring , "mahm");
echo $findstr."<br>";

echo str_replace("rawan", "ahmad", $firststring);

echo "<br>";

print_r(str_split($secandString)) ;
echo "<br>";

echo str_word_count($firststring);
echo "<br>";

echo strcasecmp("rawan", "Rawan");
echo "<br>";
echo strncasecmp("rawan", "rawun", 2);
echo "<br>";
echo strchr("Hello world dhjdwhjh!","world");
echo "<br>";
$str = "Hello World";
echo str_pad($str,20,"?");
echo "<br>";

$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$arr);
echo "<br>";echo "<br>";
$arr = array('Hello','World!','Beautiful','Day!');
echo join("  ",$arr);
echo "<br>";


$str = '&lt;a href=&quot;https://www.w3schools.com&quot;&gt;w3schools.com&lt;/a&gt;';
echo html_entity_decode($str);
echo "<br>";

$str = '<a href="https://www.w3schools.com">Go to w3schools.com</a>';
echo htmlentities($str);
echo "<br>";
$str = "This is some &lt;b&gt;bold&lt;/b&gt; text.";
echo htmlspecialchars_decode($str);

echo "<br>";
$str = "This is some <b>bold</b> text.";
echo htmlspecialchars($str);

echo "<br>";

$str = "Hello World!";
echo $str . "<br>";
echo chop($str,"World!");
?>


