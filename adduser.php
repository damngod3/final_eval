	<?php
	require('config/config.php');
	require('config/db.php');
	
	//Check submit
	 if(isset($_POST['submit'])){
	 	//Get Form data	 	$emailErr="";
	 	$username = mysqli_real_escape_string($conn, $_POST['username']);
	 	$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
	 	$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
	 	$password = mysqli_real_escape_string($conn, $_POST['password']);
	 	$email = mysqli_real_escape_string($conn, $_POST['email']);
	 		$course = mysqli_real_escape_string($conn, $_POST['course']);


		//creating studentid
		$letters = '';
		$numbers = '';
		foreach (range('A', 'Z') as $char) {	
		    $letters .= $char;
		}
		for($i = 0; $i < 10; $i++){
			$numbers .= $i;
		}
		$student_id = substr(str_shuffle($letters), 0, 3).substr(str_shuffle($numbers), 0, 9);
		//
		 //Query
		 $sql = "INSERT INTO users(student_id,username, firstname, lastname, password, email,course) VALUES('$student_id','$username', '$firstname', '$lastname', '$password', '$email','$course')";
		 if(mysqli_query($conn,$sql)){
			$_SESSION['success'] = 'Student added successfully';
		
		
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: login.php');
	

}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body{
        font-family: 'lato', 'sans-serif';
      
    }
   
    .container:hover .top:before, .container:hover .top:after, .container:hover .bottom:before, .container:hover .bottom:after, .container:active .top:before, .container:active .top:after, .container:active .bottom:before, .container:active .bottom:after;{
        margin-left: 200px;
        transform-origin: -2oopx 50%;
        transition-delay: 0s;
    }
    .container:hover .center, .container:active .center{
        opacity:1;
        transition-delay: 0.2s;
    }
    .top:before , .top:after, .bottome:before, .bottom:after{
        content:'';
        position: absolute;
        display: block;
        width: 100vmax;
        height: 100vmax;
        top: 50%;
        left: 50%;
        margin-top: -100vmax;
        transform-origin: 0 50%;
        transition: all 0.5s cubic-bezier(0.445, 0.05, 0, 1);
        z-index: 10;
        opacity: 0.65;
        transition-delay: 0.2s;
    }
    .top:before{
        transform: rotate(45deg);
        background-color: #e46569;
    }
    .top:after{
        transform: rotate(135deg);
        background-color: #ecaf81;
    }
    .bottom:before{
        transform: rotate(-45deg);
        background-color: #e46569;
    }
    .bottom :after{
        transform: rotate(-135deg);
        background-color: #ecaf81;
    }
    .center{
        position: absolute;
        width: 800px;
        height: 800px;
        left: 300px;
        margin-top: 100px;
        display: flex;
        justify-content: center;
        align-items:center;
        flex-direction: column;
        opacity: 0;
        box-shadow: 0 0 25px;
        transition: all 0.5s cubic-bezier(0.445, 0.05, 0, 1);
        transition-delay:0s;
        color: #333;
        background-color: rgba(0, 0, 0, 0.9);
        z-index:9999;
    }
   
    </style>
</head>
<body>


	<div class="container">
        <div class="top"></div>
        <div class="bottom"></div>
        <div class="center">
		<h1 style="color: #fff; font-family: 'Roboto'">REGISTER</h1>
		<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
			
				<input type="text" name="username" class="form-control" placeholder="username" required="" >  
				</div>
				<div class="form-group">
				<label></label>
				<input type="text" name="password" class="form-control" placeholder="Password" required="">
				</div>			
			<div class="form-group">
				<label></label>
				<input type="text" name="firstname" class="form-control" placeholder="Firstname" required="">
				</div>
			<div class="form-group"> 
				<label></label>
				<input type="text" name="lastname" class="form-control" placeholder="Lastname" required="">
				</div>
			
			<div class="form-group">
				<label></label>
				<input type="text" name="email" class="form-control" placeholder="Email" required="">
				</div>
				<div class="form-group">
				<label></label>
				<select type="text" name="course" class="form-control" required="">
				<option>Select Course</option>
				<option>WEB DEVELOPMENT</option>
				<option>CREATIVE WEB DESIGN</option>
			</select>
			<br>
			</div>
				
					<input type="submit" name="submit" value="REGISTER" class="btn btn-primary">&ensp;&ensp;
					<a type="button" href="login.php" class="btn btn-primary">BACK</a>
									</div>

			
			
		</form>
	</div>

</body>
</html>



