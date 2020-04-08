<?php
include 'database.php';
session_start();
$name = $_SESSION["usr"];


$con = OpenConnection();

if(isset($_POST['contact']))
{
  $to = $_POST['email'];
  $subject = "Book Enquiry";
  $message = $_POST['message'];
  $headers = $_POST['uploader_name'];

  if(mail($to,$subject,$message,$headers))
  {
    echo 'Mail sended successfully';
  }
  else
  {
    echo 'Message was not sent :(';
  }


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

        <style type="text/css">
          img{
            margin: 20px;

          }
          span{
            font-weight: bold;
            margin: 4%;
          }
          
        </style>
        
    </head>
    <body id="body">

      <div class="w3-top" style="margin-bottom: 5%;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="height:76px;">

  <a class="navbar-brand" href="homepage.php">BookMate</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <span class="w3-text-white w3-large" style="margin-left: 30%;">
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
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Log Out</a>
      </li>

  </ul>
</div>
</nav>  
</div>

<div class="w3-container">

  <script>
  function show()
  {
   document.getElementById('id01').style.display='block' 
  }

  function contact(){
    document.getElementById('id02').style.display='block';
  }

  function image(){

  }
</script>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-pale-red w3-card-4 w3-animate-zoom w3-round-large" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <img src="images/spam.jpg" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" method = "post" action="report.php" autocomplete="off">
        <div class="w3-section w3-center">
          <p class="w3-text-red" style="font-weight:bold">Report a spam user only if the book or content is irrelevent or else your account might get deleted</p>
          <input class="w3-input w3-pale-red  w3-center w3-padding-16  w3-margin-bottom" type="text" placeholder="Enter Uploader Name" name="uploader_name" required >

           <input class="w3-input w3-pale-red w3-center w3-padding-16  w3-margin-bottom" type="text" placeholder="Enter Uploader Id" name="uploader_id" required >

          <button class="w3-button  w3-red w3-padding w3-round" type="submit" name = "report">Report</button>

        </div>
      </form>

    

    </div>
  </div>


    <div id="id02" class="w3-modal">
    <div class="w3-modal-content w3-white w3-card-4 w3-animate-zoom w3-round-large" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>

        <img src="images/gmail.png" alt="Contact" style="width:30%" class=" w3-margin-top">
      </div>

      <form class="w3-container" method = "post" autocomplete="off">
        <div class="w3-section w3-center">
          <h3>Contact via e-mail</h3>
          <input class="w3-input w3-animate-input w3-center w3-padding-16  w3-margin-bottom" type="text" placeholder="Enter your email id" name="uploader_name" required >


          <input class="w3-input w3-center w3-padding-16  w3-margin-bottom" type="text" placeholder="Enter uploader's email id" name="email" required >



           <input class="w3-input w3-center w3-padding-16  w3-margin-bottom" type="text" placeholder="Enter your message" name="message" required >

          <button class="w3-button  w3-blue w3-padding w3-round" type="submit" name = "contact">Send Mail</button>
        </div>
      </form>

    

    </div>
  </div>








</div>

          

      <div class="w3-container" style="margin-top: 10%;">

        <h2 class="w3-center">Books Available</h2>
      
     <?php
       $result = mysqli_query($con, "SELECT * FROM tbl_images WHERE semester = 8");

    while ($row = mysqli_fetch_array($result)) {



       echo '<div class = "w3-row w3-card-4 w3-round-large w3-margin w3-pale-green">';

       echo '<div class=" w3-third">';
       echo '<img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="180" class="img-thumnail"  onclick = "image()" /> <br>'; 
       echo '</div>';

       echo '<div class="w3-third w3-large" style="margin-top:3%;">';
       echo '<span style="font-decoration:underline" id = "uploader">Uploaded By : </span>';echo $row['uploader'];
       echo '<br/>';
       echo '<span style="font-decoration:underline" id = "uploader">Uploader Id : </span>';echo $row['uploader_id'];
       echo '<br/>';
       echo '<span style="font-decoration:underline">Title : </span>';echo $row['title'];
       echo '<br/>';
      echo '<span style="font-decoration:underline">Branch : </span>';echo $row['branch'];
       echo '<br/>';
      echo '<span style="font-decoration:underline">Year : </span>';echo $row['year'];
       echo '<br>';
       echo '<span style="font-decoration:underline">Semester : </span>';echo $row['semester'];
       echo '<br/>';
       echo '<span style="font-decoration:underline">Price : </span>';echo $row['price'];
       echo '<br/>';
       echo '<span style="font-decoration:underline">Email-Id : </span>';echo $row['email'];


       echo '</div>';

       echo '<button class = "w3-rest w3-button w3-blue w3-round" style="margin-top:5%;margin-left:12%;margin-bottom:2%;" onclick = contact()>
          Contact
          </button>
       ';


        

       echo '<button class = "w3-rest w3-button w3-red w3-round" style="margin-top:5%;margin-left:12%;margin-bottom:3%;" onclick = show() >';
        echo 'Report';
       echo '</button>';
       echo '</div>';    
      
    }
  ?>
</div>


</body> 
</html> 

