 
 
 <?php
if(isset($_POST['name'])){
   class User{
   function getName(){
        echo "Name: " . $_POST['name'] . "<br>";
        echo "Email: " . $_POST['email'] . "<br>";
    }

   }
   $user = new User();
    $user->getName();
}

 
 ?>
 <form action="" method="post">
        <input type="text" name="name" placeholder="Enter your name" required>
        <br>
        <input type="email" name="email" placeholder="Enter your email" required>
        <br>
        <input type="submit" value="Submit">
        <br>
   
       
 </form>