 <?php
 
 if($_FILES['file']){
    $path = $_FILES['file']['name'];
    $uploads_path = "./uploads/" .$path;
    move_uploaded_file($_FILES['file']['tmp_name'], $uploads_path)
    ||die ("failed to upload");
    
 }else {
   die("No file uploaded");
 }
 ?>