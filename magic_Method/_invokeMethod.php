 <?php
 class user{
  
    function __invoke(){
        echo "My name is Aditya<br>";
    }
 }

 $user = new user();
   
    $user(); // My name is Aditya<br>

 ?>