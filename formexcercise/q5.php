<?php
if(!empty($_POST))
{
	
	if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['choose']))
	{
		echo "Hello" ." ".$_POST['name'].'<br>';
		echo "Your Email is : "." ". $_POST['email'].'<br>';

	}
else
	echo "Enter Data please";
}

else
echo "The data dose not send with post method";

///another soultion 
if($_SERVER['REQUEST_METHOD']=='POST')
{
    echo "Hello" ." ".$_POST['name'].'<br>';
	echo "Your Email is : "." ". $_POST['email'].'<br>';	
}
else
{
    echo "Hello" ." ".$_GET['name'].'<br>';
	echo "Your Email is : "." ". $_GET['email'].'<br>';
}
?>