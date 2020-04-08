<?php
session_start();
$name = $_SESSION["usr"];

if($_SESSION["usr"] == true)
{

}
else
{
  header('location:index.php');
}
?>
<html>
    <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

            <!-- jQuery library -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

            <!-- Popper JS -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

            <!-- Latest compiled JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <link href="https://fonts.googleapis.com/css?family=Philosopher&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="cascade.css">

        <title>
            Semester
        </title>
        
    </head>
    <body>

    	
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <span style="margin-right: 1%;"><img src="images/logo.png" height="30" ></span>
  <a class="navbar-brand" href="homepage.php">BookMate</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <span class="w3-text-white w3-large w3-padding-16" style="margin-left: 30%;">
    <?php echo "Welcome $name" ?>
  </span>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
    
      <li class="nav-item active">
        <a class="nav-link" href="homepage.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="books.php">Books</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="upload.php">Upload Book</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="registration.html">Link3</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Log Out</a>
      </li>

  </ul>
</div>
</nav>

	<div class="w3-animate-right">

	<div class="w3-row">
		<h2 class="w3-center">Select Semester for Computer Engineering</h2>
 <a href="sem1_computer.php"> <div class="w3-half w3-round-xlarge  w3-blue w3-panel w3-center w3-hover-opacity w3-hover-shadow" style="margin:1%; width: 48%;height: 40%;cursor: pointer;">
  	<div class="w3-center" style="margin-top:15%;">
    <h2>1st semester</h2>
    </div>
    </div></a>

 <a href="sem2_computer.php"> <div class="w3-half w3-round-xlarge w3-green w3-panel w3-center w3-hover-opacity w3-hover-shadow" style="margin:1%; width: 48%;height: 40%;cursor: pointer;">
  	<div class="w3-center" style="margin-top:15%;">
    <h2>2nd Semester</h2>
</div>
  </div></a>

   <a href="sem3_computer.php"> <div class="w3-half w3-round-xlarge w3-teal w3-panel w3-center w3-hover-opacity w3-hover-shadow" style="margin:1%; width: 48%;height: 40%;cursor: pointer;">
  	<div class="w3-center" style="margin-top:15%;">
    <h2>3rd Semester</h2>
</div>
  </div></a>

  <a href="sem4_computer.php">  <div class="w3-half w3-round-xlarge w3-dark-gray w3-panel w3-center w3-hover-opacity w3-hover-shadow" style="margin:1%; width: 48%;height: 40%;cursor: pointer;">
  	<div class="w3-center" style="margin-top:15%;">
    <h2>4th Semester</h2>
</div>
  </div></a>

   <a href="sem5_computer.php"> <div class="w3-half w3-round-xlarge w3-red w3-panel w3-center w3-hover-opacity w3-hover-shadow" style="margin:1%; width: 48%;height: 40%;cursor: pointer;">
  	<div class="w3-center" style="margin-top:15%;">
    <h2>5th Semester</h2>
</div>
  </div></a>

   <a href="sem6_computer.php"> <div class="w3-half w3-round-xlarge w3-pink w3-panel w3-center w3-hover-opacity w3-hover-shadow" style="margin:1%; width: 48%;height: 40%;cursor: pointer;">
  	<div class="w3-center" style="margin-top:15%;">
    <h2>6th Semester</h2>
</div>
  </div></a>

   <a href="sem7_computer.php"> <div class="w3-half w3-round-xlarge w3-brown w3-panel w3-center w3-hover-opacity w3-hover-shadow" style="margin:1%; width: 48%;height: 40%;cursor: pointer;">
  	<div class="w3-center" style="margin-top:15%;">
    <h2>7th Semester</h2>
</div>
  </div></a>

   <a href="sem8_computer.php"> <div class="w3-half w3-round-xlarge w3-deep-purple w3-panel w3-center w3-hover-opacity w3-hover-shadow" style="margin:1%; width: 48%;height: 40%;cursor: pointer;">
  	<div class="w3-center" style="margin-top:15%;">
    <h2>8th Semester</h2>
</div>
  </div></a>

</div>
</div>
</body>
</html>