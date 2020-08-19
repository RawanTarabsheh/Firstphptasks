<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/all.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Q3</title>
</head>
<body>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<h3>Q3:	Make input text that accept youtube video url , when I click on show will be imbedded on the same page. </h3>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
					<label>Enter youtube video url for show it : </label>
					<input type="test" name="name" >
					<br>
					<input type="submit" name="go" value="Go" class="btn btn-primary">
				</form>
				<?php
				if(isset($_POST['go']))
				{
					if(isset($_POST['name']) && $_POST['name']!= "")
					{
						$name=$_POST['name'];
						if(strrpos($name , "=") !== false){
						$name= explode('=',$name);
						$name1=$name['1'];
						$name1=chop($name1,"&list");//if choose video from list in playlist
						$name1="https://www.youtube.com/embed/".$name1;
						// another soultion
						$namemodified=substr_replace($name,"/embed/",23,9);
						//2 positon that put on // 9 char remove(watch ?v=) after /embed/ then put $namemodifed in src in iframe
						$namemodi2=str_replace("watch?v=", "embed/", $name);//another fun to replace
						?>
						<iframe width="560" height="315" src="<?php echo $name1; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						<?php
					}
					else
						echo "please enter vaild url";
			        }
			        else
			        	echo "Please Enter url";
			    }
				?>
					


			</div>
		</div>
	</div>
</body>
</html>