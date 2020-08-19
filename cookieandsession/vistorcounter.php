<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>website visitor counter</title>
</head>
<body>
<?php

if(!isset($_SESSION['number']))
	$_SESSION['number']=1;
else
	$_SESSION['number']++;
  //header( "refresh:5; http://www.facebook.com" ); 
for($i=0;$i<3;$i++)
{
	if($i==1)
	{
		sleep(5);
		header( "Location:http://www.facebook.com" ); 
	}
}
?>
<h2>You have visited this page <?php echo( $_SESSION['number'] ); ?> times in this session</h2>

</body>
</html>