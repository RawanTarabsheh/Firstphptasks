<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/all.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Q4</title>
</head>
<body>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<h3>Q4:Form builder  </h3>
	<div class="container">
		<div class="row" >
			<div class="col-lg-3"> </div>
			<div class="col-lg-6 row py-5" style="background-color:#DCDCDC; "> 
				<div class="col-lg-12 text-center display-4"><label>Form Bulider</label>
					<form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					</div>

					<div class="col-lg-1"><i class="fab fa-wpforms " style="color: blue; font-size:25px;"></i></div>
					<div class="col-lg-5">Form <input type="number" name="n1" style="width: 45px;height: 20px"></div>
					<div class="col-lg-1"><i class="fas fa-check-square mb-2" style="color: blue;font-size:25px;"></i></div>
					<div class="col-lg-5 mb-2">Text Input <input type="number" name="n2" style="width: 45px;height: 20px"></div>
					<div class="col-lg-1"><i class="fas fa-check-square mb-2" style="color: blue;font-size:25px;"></i></div>
					<div class="col-lg-5">checkBox <input type="number" name="n3" style="width: 45px;height: 20px"></div>
					<div class="col-lg-1"><i class="fas fa-check-square mb-2" style="color: blue;font-size:25px;"></i></div>
					<div class="col-lg-5">RadioButton <input type="number" name="n4" style="width: 45px;height: 20px"></div>
					<div class="col-lg-1"><i class="fas fa-check-square mb-2" style="color: blue;font-size:25px;"></i></div>
					<div class="col-lg-5">FileSelect<input type="number" name="n5" style="width: 45px;height: 20px"></div>
					<div class="col-lg-1"><i class="fas fa-check-square mb-2" style="color: blue;font-size:25px;"></i></div>
					<div class="col-lg-5">Button <input type="number" name="n6" style="width: 45px;height: 20px"></div>
					<div class="col-lg-1"><i class="fas fa-check-square mb-2" style="color: blue;font-size:25px;"></i></div>
					<div class="col-lg-5">TextArea <input type="number" name="n7" style="width: 45px;height: 20px"></div>
					<div class="col-lg-1"><i class="fas fa-check-square mb-2" style="color: blue;font-size:25px;"></i></div>
					<div class="col-lg-5">DropDownlist<input type="number" name="n8" style="width: 45px;height: 20px"></div>
					<div class="col-lg-1"><i class="fas fa-check-square mb-2" style="color: blue;font-size:25px;"></i></div>
					<div class="col-lg-5">build table<input type="number" name="n9" style="width: 45px;height: 20px"></div>
					<div class="col-lg-3">Rows<input type="number" name="row" style="width: 45px;height: 20px"></div>
					<div class="col-lg-43">colums<input type="number" name="col" style="width: 45px;height: 20px"></div>

					<div class="col-lg-12 text-center display-4"><input type="submit" name="send" value="Build" class="btn btn-primary"></form></div>

				</div>

				<div class="col-lg-3"></div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						
		<?php if(isset($_POST['send']))
		{
			$formnum=$_POST['n1'];
			$textinput=$_POST['n2'];
			$checkbos=$_POST['n3'];
			$radiobutton=$_POST['n4'];
			$FileSelect=$_POST['n5'];
			$Button=$_POST['n6'];
			$TextArea=$_POST['n7'];
			$DropDownlist=$_POST['n8'];
			$tablenum=$_POST['n9'];
			$rows=$_POST['row'];
			$col=$_POST['col'];

			if(isset($formnum))
			{
				for($i=1;$i<=$formnum;$i++)
				{
					echo 'Form'.$i;
					echo '<br><form action="" method="post">';
				
			
				if(isset($textinput))
			{
				for($i2=1;$i2<=$textinput;$i2++)
				{
					echo '<br><label class="mr-5">input text:</label><input type="text" ></input><br>';
				}

			}
				if(isset($checkbos))
			{
				for($i3=1;$i3<=$checkbos;$i3++)
				{
					echo '<br><label class="mr-5">check box :</label><input type="checkbos"></input><br>';
				}

			}
				if(isset($radiobutton))
			{
				for($i4=1;$i4<=$radiobutton;$i4++)
				{
					echo '<br><label class="mr-4">radiobutton :</label><input type="radiobutton"></input><br>';
				}

			}
				if(isset($FileSelect))
			{
				for($i5=1;$i5<=$FileSelect;$i5++)
				{
					echo '<br><label class="mr-5">File select:</label><input type="FileSelect"></input><br>';
				}

			}
				if(isset($Button))
			{
				for($i6=1;$i6<=$Button;$i6++)
				{
					echo '<br><label class="mr-5">Button:</label><button class="btn btn-primary" value="send">send</button><br>';
				}

			}

				if(isset($Button))
			{
				for($i7=1;$i7<=$Button;$i7++)
				{
					echo '<br><label class="mr-3">Text Area:</label><br><textarea rows="10" cols="25"></textarea><br>';
				}

			}
				if(isset($Button))
			{
				for($i8=1;$i8<=$Button;$i8++)
				{
					echo '<br><label class="mr-5"> select:</label><select name="cars" id="cars"> <option value="volvo">option 1</option></select><br>';
				}
			}
			echo '</form><br>';
				}

			}
			//
			//if(!isset($formnum))
			//{
			//if you wante to craet without form
					if(isset($textinput))
			{
				for($i2=1;$i2<=$textinput;$i2++)
				{
					echo '<br><label class="mr-5">input text:</label><input type="text" ></input><br>';
				}

			}
				if(isset($checkbos))
			{
				for($i3=1;$i3<=$checkbos;$i3++)
				{
					echo '<br><label class="mr-5">check box :</label><input type="checkbos"></input><br>';
				}

			}
				if(isset($radiobutton))
			{
				for($i4=1;$i4<=$radiobutton;$i4++)
				{
					echo '<br><label class="mr-4">radiobutton :</label><input type="radiobutton"></input><br>';
				}

			}
				if(isset($FileSelect))
			{
				for($i5=1;$i5<=$FileSelect;$i5++)
				{
					echo '<br><label class="mr-5">File select:</label><input type="FileSelect"></input><br>';
				}

			}
				if(isset($Button))
			{
				for($i6=1;$i6<=$Button;$i6++)
				{
					echo '<br><label class="mr-5">Button:</label><button class="btn btn-primary" value="send">send</button><br>';
				}

			}

				if(isset($Button))
			{
				for($i7=1;$i7<=$Button;$i7++)
				{
					echo '<br><label class="mr-3">Text Area:</label><br><textarea rows="10" cols="25"></textarea><br>';
				}

			}
				if(isset($Button))
			{
				for($i8=1;$i8<=$Button;$i8++)
				{
					echo '<br><label class="mr-5"> select:</label><select name="cars" id="cars"> <option value="volvo">option 1</option></select><br>';
				}
			}	
			if(isset($tablenum))
			{
				for($i9=1;$i9<=$tablenum;$i9++)
				{
					echo '<table class="table table-striped">';
					for($i=0;$i<$rows;$i++)
					{
						echo '<tr>';
						for($j=0;$j<$col;$j++)
						{
							echo '<td> 
							<input type="text">
							</td>';
						}
						echo '</tr>';
					}
					echo '</table>';
				}
			}
			}//submit


		//}
		?>
	
					</div>
				</div>
				
			</div>
		</body>
		</html>
