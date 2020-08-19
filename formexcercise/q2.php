<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Q2</title>
</head>
<body>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<h3>Q2:	Search engine website, make a form that take website name and when you click on go will redirect you to the website you entered. </h3>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
					<label>Enter website name for search : </label>
					<input type="test" name="name" >
					<br>
					<input type="submit" name="go" value="Go" class="btn btn-primary">
				</form>
					
			</div>
		</div>
	</div>
	<?php
				if(isset($_POST['go']))
				{
					if(isset($_POST['name']))
					{
						$name=$_POST['name'];
						
				      header('Location:http://www.'.$_POST['name'].'.com',true, 301);	
			        }
			        else
			        	echo "Please Enter Name";
			    }
				
				?>
</body>
</html>