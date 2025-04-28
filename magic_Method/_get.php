<?php
class User{
   public  $name = "John Doe";

   function __get($property){
     echo "Property '$property' does not exist.<br>";
   }
}
$user = new User();
echo $user->namae; // Output: John Doe
echo "<br>";
echo $user->name; // Output: John Doe
?>