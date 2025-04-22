 <?php

class UserAuth{
    function login($userType){
        echo " $userType successful!<br>";
    }
}
 class Students  extends UserAuth{
 
 }


 class Teachers{
 
 }

 $s1= new Students();
 $s1->login("student "); // Output: Login successful!<br>
 <br>
 $s1= new Teachers();
 $s1->login(); // Output: Login successful!<br>

 ?>