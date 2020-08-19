<!DOCTYPE html>
<html>
<head>
	<title>Q9</title>
</head>
<body>
<h1>File management system (you have multi file with students on different grades) 

Every file contain std_name, std_class, std_mark we want to classify the data according to this criteria:  

Delete duplicates  
Sorted according to marks 
Draw the result as a table on web page . 
If the mark the same try to sort it aphetically.   </h1>

<?php
include "src/SimpleXLSX.php";

  echo '<h1>The Output</h1><pre>';

  if ( $xlsx = SimpleXLSX::parse("Book1.xlsx") ) {
    echo '<table><tbody>';
    $i = 0;

    foreach ($xlsx->rows() as $elt) {
      if ($i == 0) {
        echo "<tr><th>" . $elt[0] . "</th><th>" . $elt[1] . "</th><th>".$elt[2]. "</th></tr>";
      } else {
        echo "<tr><td>" . $elt[0] . "</td><td>" . $elt[1] . "</th><th>".$elt[2]. "</th></tr>";
      }      

      $i++;
    }

    echo "</tbody></table>";

  } else {
    echo SimpleXLSX::parseError();
  }
?>
</body>
</html>