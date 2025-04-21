 <?php
 include("./config.php");


 if(isset($_GET['id'])){
     $id=$_GET['id'];
     $getStudent=$conn->prepare("SELECT * FROM students where id=:id");
     $getStudent->execute([':id' => $id]);
     $student=$getStudent->fetchAll();
      $name = $student[0]['name'];
      $number = $student[0]['number'];
      $email = $student[0]['email'];
      $city = $student[0]['city'];
      $course = $student[0]['course'];
        
    
 }
 
 ?>
 <form action="" method="post">
        <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Name"><br><br>
        <input type="text" name="number" value="<?php echo $number; ?>" placeholder="Number"><br><br>
        <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Email"><br><br>
        <input type="text" name="city" value="<?php echo $city; ?>" placeholder="City"><br><br>
        <input type="text" name="course" value="<?php echo $course; ?>" placeholder="Course"><br><br>
        <button value="<?php echo $id; ?>" name="update" type="submit">Update</button>
 </form>
 
 <?php
 if(isset($_POST['update']))
 {
 $id= $_POST['update'];
 $name= $_POST['name'];
 $number= $_POST['number'];
 $email= $_POST['email'];
 $course= $_POST['course'];
 $city= $_POST['city'];

 
 $updatestudent = $conn->prepare("UPDATE students SET name = '$name', number = '$number', email = '$email', course = '$course', city = '$city' WHERE id = '$id'");

        if($updatestudent->execute()){
            header("Location: delete_edit.php");
        
        }else{
            echo "Error updating record: " . $conn->error;
        }
    }

 
 
 ?>
 
