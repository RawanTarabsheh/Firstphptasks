<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/all.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<title>Q1</title>
</head>
<body>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<h1>Q1:	Write a PHP script, which changes the color of string. (on the same page)</h1>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
					<label>enter name</label>
					<input type="text" name="name">
					<label class="pr-2 ">Choose color</label>
					<input type="color" name="color">
					<br>
					<input type="submit" name="choose" value="send" class="btn btn-primary">
				</form>
				<?php
				if(isset($_POST['choose']))
				{

					echo '<label class="display-4" style="color:'.$_POST['color'].'"> Hello '.$_POST['name'].'</label>';

					echo '<p style="color:'.  $_POST['color'] .
					'" class="py-5 display-4">
					This Paragraph In The same Color You choose
					</p> ';
				}

				?>

			</div>
		</div>
	</div>
</body>
</html>