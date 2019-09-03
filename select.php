<?php
require('config/config.php');
	require('config/db.php');

 if(isset($_POST['submit'])){
	 	//Get Form data	 	$emailErr="";

	 	$tech_name = mysqli_real_escape_string($conn, $_POST['tech_name']);

	 	$sql="INSERT INTO `teacher`(tech_name) VALUES ('$tech_name')";

		 if(mysqli_query($conn,$sql)){
			$_SESSION['success'] = 'Student added successfully';
		
		
	}
	else{
		
	}

	header('location: question.php');
	

}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<?php include('inc/navbar.php');?>
	<br>
	<br>
	<br>
	<center>
		<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
				<h1 style="font-family: impact">Select a Teacher</h1>
				<select type="text" name="tech_name" class="form-control"  style="width: 900px;" >  
				<option></option>
				<option>Jonathan Estacio</option>
				<option>Maam Sharon</option>
				<option>Albert Einstein</option>
			</div>
		</select>
		</div>


			<input type="submit" name="submit" class="btn btn-primary" value="Evaluate">

</form>
</center>
</body>
</html>