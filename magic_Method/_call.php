 <?php
 spl_autoload autoLoader($class){
    include($class . '.php');
 }
 $user = new User();
 
 ?>