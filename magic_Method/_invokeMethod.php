 <?php
 class user{
  
    function __invoke(){
        echo "My name is Aditya<br>";
    }
    
 }

 $user = new user();
    $user->getName(); // My name is Aditya<br>
    $user(); // My name is Aditya<br>
    
 ?>