<?php

//$sql=mysqli_query($conn,"select student_id,firstname,lastname,username,password from users where username = '$username'")or die ("query 1 incorrect.......");

//list($student_id,$firstname,$lastname,$username,$password)=mysqli_fetch_array($sql);
?>
  <!DOCTYPE html>
  <html>
  <head>
    <title></title>
<style type="text/css">

  nav ul{
    float: left;
    list-style-type: none;
    margin-top: 15px;   
    margin-right: 30px;
  }
    .dropbtn {

  padding: 10px;
  font-size: 20px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: gray;}

</style>
  </head>
  <body>
  
 
<!--<nav class="navbar navbar-expand-lg navbar-light bg-primary">-->
  <!--
  <nav>
        <ul>
            <li> <a class="nav-link" href="<?php echo ROOT_URL; ?>index.php">HOME</a></li>   
             <li><a class="nav-link" href="<?php echo ROOT_URL; ?>question.php">EVALUATION PAGE</a></li>
                          <li> <a class="nav-link" href="<?php echo ROOT_URL; ?>student.php">MY ACCOUNT</a></li>

        
            
    
           </ul>

        <!-- <li>NAME:<strong><?php echo $username; ?></strong></li>--
     
            <li><a  class="logout" href="<?php echo ROOT_URL; ?>login.php">LOGOUT</a></li>

      </li>    
        </nav>

-->
 <nav class="navbar navbar-expand-md navbar-light" style="background-image: linear-gradient(rgba(255,255,255,0.8),rgba(0,0,0,0.6));">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
            </li>
           
            <li class="nav-item">
                <a class="nav-link" href="select.php">Evaluation</a>
            </li>
            <div class="dropdown">
  <li class="dropbtn">Courses</li>
  <div class="dropdown-content">
    <a href="webdev.php">Web Devlopment</a>
    <a href="cwd.php">Creative Web Design</a>
    <a href="ems.php">Event Management Services</a>
  </div>
</div>
        </ul>
             
    </div>
  
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li>
              <a class="nav-link" href="<?php echo ROOT_URL;?>student.php">My Account</a>
            </li>
            <li class="nav-item">

                <a class="nav-link" href="<?php echo ROOT_URL;?>login.php">Logout</a>
            </li>

            <!--li class="nav-item">
                <a class="nav-link" href="../enrollment/studentlistpreview.php">Student List</a>
            </li-->
        </ul>
    </div>
</nav>
        
 </body>
  </html>


