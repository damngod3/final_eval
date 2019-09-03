<?php

  include('session.php');
  include('config/config.php');
  include('config/db.php');
  $username=$_SESSION['username'];

$sql=mysqli_query($conn,"select student_id,firstname,lastname,username,password,course from users where username = '$username'")or die ("query 1 incorrect.......");

list($student_id,$firstname,$lastname,$username,$password,$course)=mysqli_fetch_array($sql);


  
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

<?php include('inc/navbar.php'); ?>
          <!-- <h1 style="float: left; font-family: 'Impact'">WELCOME: &ensp; <?php echo $username ?></h1>-->
  <div class="jumbotron">

      <form class="pull-right" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <div class="container" style="background-image: url('inc/excelwall.png'); text-align: justify">
         
        <center><h3 style="font-size:50px;">Excel Technical Skills and Career Center Inc.</h3></center>
       
    

<!-------------------------ABOUT------------------------>
<section id="about"style="background-color: darkorange; background-size: cover; margin: 10px; background-position: center; height: 500px;">
  <div class="container" style="padding-top: 110px;">
  <div class="row">
    <div class="col-md-6">
      
    </div>
    <div class="col-md-6" style="text-align: left;">
      <h1>About Us</h1>
      <h3>Excel Technical Skills and Career Center, Inc. was established with the aim of providing quality IT Training that is affordable and usable for the students.</h3>
    </div>
  </div>
  </div>
</section>
<!--------------------------COURSES-------------------------->

<!-------------------------CONTACT-------------------------->
<section id="contact" style="background-color: darkorange; background-size: cover; margin: 10px; background-position: center;">
  <div class="container">
    <div class="row">
      <div class="col-md-6" style="padding: 10px;">
        <h1>Location</h1><h4><i class="fa fa-location-arrow" aria-hidden="true"></i> #201 Mahogany St. Corner Marcos Highway, Santolan, Pasig</h4>
        <div id="googleMap" style="width:100%;height:400px;"></div>
        <script>
        function myMap() {
        var mapProp= {
          center:new google.maps.LatLng(14.619016, 121.091526),
          zoom:5,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
        }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB80vEHjtC-g7tAAurqebrs2oNcNQSO3Ok&callback=myMap"></script>
      </div>
      <div class="col-md-6" style="padding: 20px; text-align: center;">
        <h1 style="margin-top: 80px;">Contacts</h1>
        <div class="container">
        <a href="https://www.facebook.com/exceltscareercenter/"><h4><i class="fa fa-facebook-square" aria-hidden="true"></i> exceltscareercenter</h4></a>
        <a href="https://www.messenger.com/t/exceltscareercenter"><h4><i class="fa fa-facebook-messenger" aria-hidden="true"></i> exceltscareercenter</h4></a>
        <h4><i class="fa fa-phone" aria-hidden="true"></i> (02) 656 1738</h4>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="../include/smooth-scroll.js"></script>
<script>
  var scroll = new SmoothScroll('a[href*="#"]');
</script>
</body>
</html>