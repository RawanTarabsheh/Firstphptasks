<!DOCTYPE html>
<html>
<head>
	<title>Test Cookies</title>
</head>
<body>
<?php
if (isset($_GET['cookiecheck'])) {
    if (isset($_COOKIE['testcookie'])) {
        print "Cookies are enabled";
    } else {
        print "Cookies are not enabled";
    }
} else {
    setcookie('testcookie', "testvalue");
    die(header("Location: " . $_SERVER['PHP_SELF'] . "?cookiecheck=1"));
}


  header( "refresh:5; url=vistorcounter.php" ); 

?>
</body>
</html>