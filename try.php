<?php  
include 'database.php';
$con = OpenConnection();
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

 <?php
if(isset($_POST['submit']))
{
  
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
           <br /><br />  

                <div class="w3-animate-right">
  <form class="w3-card w3-white" method="post" enctype="multipart/form-data"style="width: 60%; margin: auto">
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

    <input type="file" name="image" id="image" />  
                     <br />  
                     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />  
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