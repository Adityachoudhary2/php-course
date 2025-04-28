 <?php
   class User{
    private $name = "John Doe";
     function __set($property, $value){
       echo "Property '$property' does '$value' exist.<br>";
     }
   
       
   }

   $user = new User();
     $user->name="ok" // Output: John Doe
 ?>