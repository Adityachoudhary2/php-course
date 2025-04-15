<?php

if(isset($_POST['name'])){
    echo "User name is " . $_POST['name'] . "<br>"; 
    echo "User email is " . $_POST['email'] . "<br>";
    echo "User phone is " . $_POST['phone'] . "<br>";
    echo "User password is " . $_POST['password'] . "<br>";
    echo "User skills is " .implode(", ",$_POST['skill'])  . "<br>";
    echo "User gender is " . $_POST['gender'] . "<br>";
    echo "User city is " . $_POST['city'] . "<br>";
    echo "User bio is " . $_POST['bio'] . "<br>";
}


?>