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
        <button value="<?php echo $id; ?>" type="submit">Update</button>
 </form>