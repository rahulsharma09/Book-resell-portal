 <?php  
include 'database.php';
$con = OpenConnection();

session_start();
$name = $_SESSION["usr"];

if($_SESSION["usr"] == true)
{

}
else
{
  header('location:index.php');
}

 if(isset($_POST["insert"]))  
 {  

 		$name = "";
 		$email = "";
 		$title = "";
 		$image = "";
 		$file = "";
 		$pages = "";
 		$author = "";
 		$price = "";
 		$branch = "";
 		$sem = "";
 		$year = "";


 	  $uploader = $_POST['name'];
 	  $email = $_POST['email'];
 	  $title = $_POST['title'];
 	  $pages = $_POST['pages'];
 	  $year = $_POST['year'];
 	  $branch = $_POST['branch'];
 	  $sem = $_POST['semester'];
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $author = $_POST['author'];
      $price = $_POST['price'];

      $query = "INSERT INTO tbl_images(uploader,email,title,pages,year,branch,semester,name,author,price) VALUES ('$uploader','$email','$title','$pages','$year','$branch','$sem','$file','$author','$price')"; 
      $res = mysqli_query($con,$query); 
      if($res)  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  

      
  if($res)
  {
  	header('location:uploadSuccess.php');
  }
  else
  {
    echo 'Not Uploaded';
  }
 }  
 ?>

 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Upload Book</title>  
           <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
      </head>  
      <body>  

   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <span style="margin-right: 1%;"><img src="images/logo.png" height="30" ></span>
  <a class="navbar-brand" href="#">BookMate</a>
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
        <a class="nav-link" href="account.php">Account</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Log Out</a>
      </li>

  </ul>
</div>
</nav>

  <div class="w3-animate-right">
  <form class="w3-card w3-white" method="post" enctype="multipart/form-data"style="width: 75%; margin: auto" autocomplete="off">
    <h2 class="w3-center w3-teal py-2">Enter Details</h2>
    <input class="w3-input w3-center w3-animate-input w3-padding-16 " style="margin:auto;width: 50%;" placeholder="Name" type="text" name="name" required></input>
    <br><br>

    <input class="w3-input w3-center w3-animate-input w3-padding-16 " style="margin:auto;width: 50%;" placeholder="Email" type="text" name="email" required></input>
    <br><br>

    <input class="w3-input w3-center w3-animate-input w3-padding-16 " style="margin:auto;width: 50%;" placeholder="Title" type="text" name="title" required></input>
    <br><br>
    
    <input class="w3-input w3-center w3-animate-input w3-padding-16 " style="margin:auto;width: 50%;" placeholder="Pages" type="number" name="pages" required></input>
    <br><br>
    
    <input class="w3-input w3-center w3-animate-input w3-padding-16 " style="margin:auto;width: 50%;" placeholder="Branch" type="text" name="branch" required></input>
    <br><br>

    <input class="w3-input w3-center w3-animate-input w3-padding-16 " style="margin:auto;width: 50%;" placeholder="Semester" type="number" name="semester" required></input>
    <br><br>

    <input class="w3-input w3-center w3-animate-input w3-padding-16 " style="margin:auto;width: 50%;" placeholder="Year" type="number" name="year" required></input>
    <br><br>
    
    <input class="w3-input w3-center w3-animate-input w3-padding-16 " style="margin:auto;width: 50%;" placeholder="Author" type="text" name="author" required></input>
    <br><br>
    
    <input class="w3-input w3-center w3-animate-input w3-padding-16 " style="margin:auto;width: 50%;" placeholder="Price" type="number" name="price" required></input>
    <br><br>

    <div class="w3-center">
    <input type="file" name="image" id="image" class="w3-input w3-center" />  
                     <br />  
                     <input type="submit" class="w3-center w3-blue w3-button w3-round" name="insert" id="insert" value="Upload" class="btn btn-info" style="margin-bottom:3%;" />  
                     </div>
  </form>
</div>
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File Extension - please upload ("jpeg","png","jpg")');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>