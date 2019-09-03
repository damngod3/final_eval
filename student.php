<?php

	include('session.php');
	include('config/config.php');
	include('config/db.php');
	$username=$_SESSION['username'];



?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Student Panel</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="style/css/bootstrap.min.css" rel="stylesheet">
<link href="style/css/k.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

</head>
<style type="text/css">
	body{
		background-image: url('img/excelicon.jpg');
	}
</style>
  	<body> 
        <?php include('inc/navbar.php');?>
        <br>
        <br>
        <br>
						<div class="row">
        <div class="container-fluid">       
	<center>
					<div class="col-sm-9">
					 <div class="panel panel-primary" style="margin-left:20px">
						<div class="panel-heading" style="width: auto; background-color:#660000">
					
						<h3 style="color:white">Student Info</h3>
										</div>
					<div class="panel-body">
<!--This is from student panel -->
						<div class='table-responsive'>  
            <div style="overflow-x:scroll;">
    <table class="table table-striped " style="width: auto; font-size:25px;" >
					<tr class="info">
                    <td><h3>Student ID</h3></td>
                    <td><h3>Firstname</h3></td>	
					<td><h3>Username</h3></td>
					<td><h3>Password</h3></td>
					<td><h3>Email</h3></td>
					<td><h3>Course</h3></td>
						</tr>
						<?php
						$sql=mysqli_query($conn,"select student_id,firstname,lastname,username,password,email,course from users where username = '$username'")or die ("query 1 incorrect.......");

list($student_id,$firstname,$lastname,$username,$password,$email,$course)=mysqli_fetch_array($sql);
{
echo "<tr><td>$student_id</td><td>$firstname</td><td>$lastname</td><td>$username</td><td>$email</td><td>$course</td>";
}
?>
					</table>

				
			</h3></h3>
			</div>
                </div></div>	</div>  
        
  

        </div>
      </body>

</html>
